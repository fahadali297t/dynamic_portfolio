<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileManagerController extends Controller
{
    public function view()
    {
        $files = FileManager::orderBy('id', 'desc')->get();
        return view('admin.pages.file-manager', ['files' => $files]);
    }
    public function submit(Request $request)
    {
        $validData = $request->validate([
            'uploads' => 'required|array',
            'uploads.*' => 'file|max:25600'
        ]);
        if ($validData) {
            // Image file extensions
            $imageExt = [
                'jpg',
                'jpeg',
                'png',
                'gif',
                'bmp',
                'tiff',
                'tif',
                'webp',
                'svg',
                'ico',
                'heic',
                'heif',
                'raw'
            ];

            // Video file extensions
            $videoExt = [
                'mp4',
                'mkv',
                'mov',
                'avi',
                'wmv',
                'flv',
                'webm',
                'm4v',
                '3gp',
                'mpeg',
                'mpg',
                'ogv',
                'mts',
                'vob'
            ];

            // Other file extensions
            $otherExt = [
                'pdf',
                'doc',
                'docx',
                'xls',
                'xlsx',
                'ppt',
                'pptx',
                'txt',
                'rtf',
                'odt',
                'ods',
                'odp',
                'zip',
                'rar',
                '7z',
                'tar',
                'gz',
                'mp3',
                'wav',
                'ogg',
                'flac',
                'aac'
            ];

            $files = $request->file('uploads');
            foreach ($files as  $value) {
                $ext = strtolower($value->getClientOriginalExtension());
                $name = $value->getClientOriginalName();
                $path = time() . '_' . uniqid() . '_' . Str::slug($value->getClientOriginalName()) . '.' . $ext;
                $size = round($value->getSize() / 1024 / 1024, 2);

                if (in_array($ext, $imageExt)) {
                    $type = 'image';
                    $public_path = 'storage/uploads/files/images/' . $path;
                    $value->storeAs('uploads/files/images', $path, 'public');
                } elseif (in_array($ext, $videoExt)) {
                    $type = 'video';
                    $public_path = 'storage/uploads/files/videos/' . $path;
                    $value->storeAs('uploads/files/videos', $path, 'public');
                } elseif (in_array($ext, $otherExt)) {
                    $type = 'document';
                    $public_path = 'storage/uploads/files/documents/' . $path;
                    $value->storeAs('uploads/files/documents', $path, 'public');
                } else {
                    $type = 'document';
                    $public_path = 'storage/uploads/files/documents/' . $path;
                    $value->storeAs('uploads/files/documents', $path, 'public');
                }


                $data = [
                    'name' => $name,
                    'path' => $path,
                    'public_path' => $public_path,
                    'ext' => $ext,
                    'type' => $type,
                    'size' => $size,
                ];


                FileManager::create($data);
            }
            return redirect()->route('file.view')->with('success', 'File added successfully');
        } else {
            return redirect()->route('file.view')->with('error', 'File Size must not greater then 25MB');
        }
    }

    public function delete(Request $request)
    {
        $path = str_replace('storage/', '', $request->public_path);
        // Storage::disk('public')->delete($request->public_path);
        // dd($request->all());
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
            $file = FileManager::findorfail($request->id);
            $file->delete();
            return redirect()->route('file.view')->with('success', 'File Deleted Successfully');
        } else {
            return redirect()->route('file.view')->with('error', 'File Not Found');
        }
    }


    // for Images to show 
    public function viewImage(Request $request)
    {
        $q = $request->query('q'); // or $request->get('q')
        $files = FileManager::where('type', 'image')->orderBy('id', 'desc')->get();

        return view('partials.image-gallery', ['files' => $files, 'q' => $q])->render();
    }
    // for Pdf File
    public function viewPdf(Request $request)
    {

        $q = $request->query('q'); // or $request->get('q')
        if ($q == 'a') {
            $id = null;
        } else {
            $id = Auth::user()->resume;
        }

        $files = FileManager::where('ext', 'pdf')->orderBy('id', 'desc')->get();

        return view('partials.pdf-gallery', ['files' => $files, 'id' => $id, 'q' => $q])->render();
    }
}
