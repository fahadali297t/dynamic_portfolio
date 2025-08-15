<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use App\Models\FileManager;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $resume_id = Auth::user()->resume;
        $details = Designer::first();
        $resume = FileManager::where('id', $resume_id)->first();
        return view('dashboard', ['details' => $details, 'resume' => $resume]);
        // return $resume;
    }
}
