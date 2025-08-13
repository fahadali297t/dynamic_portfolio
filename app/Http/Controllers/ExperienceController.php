<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function list()
    {
        $exp = Experience::get();
        return view('admin.pages.experience', ['exp' => $exp]);
    }
    public function new()
    {
        return view('admin.pages.add_experience');
    }
    public function add(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
        if ($data) {
            Experience::create($data);
            return redirect()->route('exp.list')->with('success', 'Experience Added Successfully');
        } else {
            return redirect()->route('exp.new');
        }
        // dd($request->all());
        // return view('admin.pages.add_education');
    }

    public function del(Request $request)
    {
        $id = $request->id;
        $edu = Experience::findorfail($id);
        $edu->delete();
        return redirect()->route('exp.list')->with('success', 'Experience Deleted Successfully');
    }

    public function edit(Request $request)
    {
        $exp = Experience::findorfail($request->id);
        return view('admin.pages.edit_experience', ['exp' => $exp]);
    }
    public function update(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
        if ($data) {
            $exp = Experience::findorfail($request->id);
            $exp->name = $data['name'];
            $exp->company = $data['company'];
            $exp->start = $data['start'];
            $exp->end = $data['end'];
            $exp->save();

            return redirect()->route('exp.list')->with('success', 'Experience Successfully Updated');
        } else {
            return redirect()->route('exp.list');
        }
        // dd($request->all());
        // return view('admin.pages.add_education');
    }
}
