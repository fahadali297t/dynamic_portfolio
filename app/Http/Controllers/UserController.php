<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Work;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewHome()
    {
        $services = Services::with('file_manager')->orderBy('id', 'desc')->get();
        $work = Work::with(['services', 'file_manager'])->get();
        return view('welcome', ['services' => $services, 'works' => $work]);
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
}
