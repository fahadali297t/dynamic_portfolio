<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function list()
    {
        $edu = Education::get();
        return view('admin.pages.education', ['edu' => $edu]);
    }
    public function new()
    {
        return view('admin.pages.add_education');
    }
    public function add(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required',
            'institute' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
        if ($data) {
            Education::create($data);
            return redirect()->route('edu.list')->with('success', 'Education Added Successfully');
        } else {
            return redirect()->route('edu.new');
        }
        // dd($request->all());
        // return view('admin.pages.add_education');
    }

    public function del(Request $request)
    {
        $id = $request->id;
        $edu = Education::findorfail($id);
        $edu->delete();
        return redirect()->route('edu.list')->with('success', 'Education Deleted Successfully');
    }

    public function edit(Request $request)
    {
        $edu = Education::findorfail($request->id);
        return view('admin.pages.edit_education', ['edu' => $edu]);
    }
    public function update(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required',
            'institute' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
        if ($data) {
            $edu = Education::findorfail($request->id);
            $edu->name = $data['name'];
            $edu->institute = $data['institute'];
            $edu->start = $data['start'];
            $edu->end = $data['end'];
            $edu->save();

            return redirect()->route('edu.list')->with('success', 'Education Successfully Updated');
        } else {
            return redirect()->route('edu.new');
        }
        // dd($request->all());
        // return view('admin.pages.add_education');
    }
}
