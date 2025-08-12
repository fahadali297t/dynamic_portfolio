<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewHome()
    {
        $services = Services::with('file_manager')->orderBy('id', 'desc')->get();
        return view('welcome', ['services' => $services]);
        // return $services;
    }
}
