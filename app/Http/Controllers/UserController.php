<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use App\Models\Education;
use App\Models\Experience;
use App\Models\FileManager;
use App\Models\Services;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewHome()
    {
        $services = Services::with('file_manager')->orderBy('id', 'desc')->get();
        $testimonials = Testimonial::with('file_manager')->orderBy('id', 'desc')->get();
        $work = Work::with(['services', 'file_manager'])->get();
        $educations = Education::get();
        $experiences = Experience::get();
        $skills = Skill::paginate(6);
        $user = Designer::first();
        $resume_id = "";
        $resume = '';

        $designer = Designer::with(['file_manager' => function ($query) {
            $query->where('ext', 'pdf');
        }])->first();
        if ($designer) {
            $resume_id = $designer->file_manager[0]->id;
        }

        if ($resume_id) {
            $resume = $designer->file_manager[0]->public_path;
        }
        return view(
            'welcome',
            [
                'services' => $services,
                'works' => $work,
                'educations' => $educations,
                'experiences' => $experiences,
                'skills' => $skills,
                'resume' => $resume,
                'user' => $user,
                'testimonial' => $testimonials
            ]
        );
    }

    public function services()
    {
        $services = Services::with('file_manager')->get();

        return view('frontend.services', ['services' => $services]);
    }
    public function singleService(Request $request)
    {
        // return $request->id;
        $service = Services::with('file_manager')->findorfail($request->id);

        return view('frontend.single_service', ['service' => $service]);
    }

    public function projects()
    {
        $works = Work::with(['file_manager', 'services'])->get();

        return view('frontend.portfolio', ['works' => $works]);
    }
    public function singleProject(Request $request)
    {
        // return $request->id;
        $work = Work::with('file_manager', 'services')->findorfail($request->id);

        return view('frontend.single_project', ['work' => $work]);
    }


    public function addResume(Request $request)
    {
        // return $request->all();
        $data = $request->validate([
            'id' => 'required',
            'resume' => 'required',
        ]);
        if ($data) {

            $user =  Designer::with(['file_manager' => function ($query) {
                $query->where('ext', 'pdf');
            }])->first();
            if ($user->file_manager->isNotEmpty()) {
                $file_id =  $user->file_manager[0]->id;
                $file = FileManager::findorfail($file_id);
                $file->designer_id = null;
                $file->save();
            }


            $file = FileManager::findorfail($data['resume']);
            $file->designer_id = $data['id'];
            $file->save();

            return redirect()->route('dashboard')->with('success', 'Resume Updated Successfully');
        } else {
            return redirect()->route('dashboard')->with('error', 'We are facing some error');
        }
    }
}
