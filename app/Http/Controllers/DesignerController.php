<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'id' => 'required'
        ]);

        if ($data) {
            $user = Designer::findorfail($request->id);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone_number = $request->phone_number;
            $user->address = $request->address;
            $user->facebook = $request->facebook;
            $user->instagram = $request->instagram;
            $user->linkedin = $request->linkedin;
            $user->youtube = $request->behance;
            $user->fiverr = $request->dribble;
            $user->upwork = $request->upwork;
            $user->save();
            return redirect()->route('dashboard')->with('success', 'Record Updated');
        } else {
            return redirect()->route('dashboard')->with('success', 'Something Went Wrong');
        }
    }
}
