<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $resume_id = Auth::user()->resume;
        $skills = Skill::with('file_manager')->get();
        $resume = FileManager::where('id', $resume_id)->first();
        return view('dashboard', ['skills' => $skills, 'resume' => $resume]);
        // return $resume;
    }
}
