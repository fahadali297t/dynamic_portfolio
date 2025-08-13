<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $skills = Skill::with('file_manager')->get();
        return view('dashboard', ['skills' => $skills]);
    }
}
