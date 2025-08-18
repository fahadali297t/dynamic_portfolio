<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use App\Models\FileManager;
use App\Models\Skill;
use App\Models\User;
use App\Models\UserImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function dashboard()
    {
        $resume = '';
        $resume_id = '';
        $details = Designer::first();
        $designer = Designer::with(['file_manager' => function ($query) {
            $query->where('ext', 'pdf');
        }])->first();

        if ($designer && $designer->file_manager->isNotEmpty()) {
            $resume = $designer->file_manager->first(); // safer than [0]
            $resume_id = $resume->id;
        }

        $designer = Designer::first();

        return view('dashboard', ['designer' => $designer,  'details' => $details, 'resume' => $resume]);
        // return $resume;
    }

    public function addUserImage(Request $request)
    {
        // return $request->all();

        $data = $request->validate([
            'purpose' => 'required',
            'image' => 'required'
        ]);

        if ($data && $request->hasFile('image')) {
            $value = $request->file('image');
            $ext = $value->getClientOriginalExtension();
            $path = time() . '_' . uniqid() . '_' . Str::slug($value->getClientOriginalName()) . '.' . $ext;

            $public_path = 'storage/uploads/files/images/' . $path;
            $designer = Designer::first();

            if ($request->purpose == 'primary') {
                if ($designer->primaryImage) {
                    $deletePath = str_replace('storage/', '', $designer->primaryImage);
                    Storage::disk('public')->delete($deletePath);
                }
                $value->storeAs('uploads/files/images', $path, 'public');
                $designer->primaryImage = $public_path;
                $designer->save();
            } else {
                if ($designer->secondaryImage) {
                    $deletePath = str_replace('storage/', '', $designer->secondaryImage);
                    Storage::disk('public')->delete($deletePath);
                }
                $value->storeAs('uploads/files/images', $path, 'public');
                $designer->secondaryImage = $public_path;
                $designer->save();
            }
            return redirect()->route('dashboard');
        } else {
            # code...
        }
    }


    public function settings()
    {
        return view('admin.pages.settings');
    }


    public function updateEmailAndPassword(Request $request)
    {
        $data  = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'id' => 'required'
        ]);
        if ($data) {
            $user = User::findorfail($request->id);
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->save();
            return redirect()->route('setting')->with('success', 'Record Updated');
        } else {
            return redirect()->route('setting')->with('error', 'Something went wrong');
        }
    }
}
