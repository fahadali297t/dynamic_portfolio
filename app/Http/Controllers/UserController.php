<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use App\Models\Education;
use App\Models\Experience;
use App\Models\FileManager;
use App\Models\Services;
use App\Models\Skill;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewHome()
    {
        $services = Services::with('file_manager')->orderBy('id', 'desc')->get();
        $work = Work::with(['services', 'file_manager'])->get();
        $educations = Education::get();
        $experiences = Experience::get();
        $skills = Skill::paginate(6);
        $user = Designer::first();
        $resume_id = User::first()->resume;
        $resume = '';
        if ($resume_id) {
            $resume = FileManager::where('id', $resume_id)->first()->public_path;
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
            ]
        );



        // return $services;
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
            $user =  User::findorfail($request->id);
            $user->resume = $request->resume;
            $user->save();
            return redirect()->route('dashboard')->with('success', 'Resume Updated Successfully');
        } else {
            return redirect()->route('dashboard')->with('error', 'We are facing some error');
        }
    }
}
