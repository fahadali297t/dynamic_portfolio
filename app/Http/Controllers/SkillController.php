<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function list()
    {
        $skills = Skill::get();
        return view('admin.pages.skills', ['skills' => $skills]);
    }
    public function new()
    {
        return view('admin.pages.add_skills');
    }
    public function add(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required',
            'experti' => 'required',
            'image_id' => 'required'
        ]);
        if ($data) {
            Skill::create([
                'name' => $data['name'],
                'experty' => $data['experti'],
                'file_manager_id' => $data['image_id'],
            ]);
            return redirect()->route('skill.list')->with('success', 'Skill Added Successfully');
        } else {
            return redirect()->route('skill.new');
        }
        // dd($request->all());
        // return view('admin.pages.add_education');
    }

    public function del(Request $request)
    {
        $id = $request->id;
        $edu = Skill::findorfail($id);
        $edu->delete();
        return redirect()->route('skill.list')->with('success', 'Skill Deleted Successfully');
    }

    public function edit(Request $request)
    {
        $skill = Skill::findorfail($request->id);
        return view('admin.pages.edit_skill', ['skill' => $skill]);
    }
    public function update(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required',
            'experti' => 'required',
            'image_id' => 'required'
        ]);
        if ($data) {
            $skill = Skill::findorfail($request->id);
            $skill->name = $data['name'];
            $skill->experty = $data['experti'];
            $skill->file_manager_id = $data['image_id'];
            $skill->save();

            return redirect()->route('skill.list')->with('success', 'Skill Successfully Updated');
        } else {
            return redirect()->route('skill.list');
        }
        // dd($request->all());
        // return view('admin.pages.add_education');
    }
}
