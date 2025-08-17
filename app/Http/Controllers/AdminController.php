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
        return view('dashboard', ['details' => $details, 'resume' => $resume]);
        // return $resume;
    }
}
