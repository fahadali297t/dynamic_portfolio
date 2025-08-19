<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    public function getworksPage()
    {

        $data = Work::with(['file_manager', 'services'])->get();
        return view('admin.pages.works', ['data' => $data]);
        // return $data;
    }

    public function getAddWorkPage()
    {
        $service = Services::get();
        return view('admin.pages.add_work', ['services' => $service]);
    }


    public function addWork(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'short_description' => 'required|string|max:255',
            'description' => 'required',
            'service_id' => 'required',
            'image_id' => 'required',
        ]);



        if ($data) {
            Work::create([
                'title' => $data['name'],
                'short_description' => $data['short_description'],
                'description' => $data['description'],
                'client' => $request->client,
                'start' => $request->start,
                'complete' => $request->end,
                'link' => $request->link,
                'services_id' => $data['service_id'],
                'file_manager_id' => $data['image_id'],

            ]);
            return redirect()->route('work.list')->with('success', 'Project Added Successfully');
        } else {
            return redirect()->route('work.new');
        }
    }

    // // to delete

    public function  delWork(Request $request)
    {
        $id =  $request->id;
        $work = Work::findorfail($id);
        if ($work) {
            $work->delete();
            return redirect()->route('work.list')->with('success', 'Project Deleted Successfully');
        } else {
            return redirect()->route('work.list')->with('error', 'We are facing issue deleting this Project');
        }
    }


    // // Get Update page

    public function editWork(Request $request)
    {
        $data = Work::with(['file_manager', 'services'])->findorfail($request->id);
        $services = Services::get();

        if ($data) {
            return view('admin.pages.edit_work', ['data' => $data, 'services' => $services]);
        } else {
            return redirect()->route('work.list')->with('error', 'Service Not Found');
        }
    }


    // // store updated one
    public function updateWork(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'short_description' => 'required|string|max:255',
            'description' => 'required',
            'service_id' => 'required',
            'image_id' => 'required',
        ]);



        if ($data) {
            $work = Work::findorfail($request->id);

            if ($work) {
                $work->title = $data['name'];
                $work->short_description = $data['short_description'];
                $work->description = $data['description'];
                $work->client = $request->client;
                $work->start = $request->start;
                $work->complete = $request->end;
                $work->link = $request->link;
                $work->services_id = $data['service_id'];
                $work->file_manager_id = $data['image_id'];
                $work->save();
                return redirect()->route('work.list')->with('success', 'Project updated successfully');
            } else {
                return redirect()->route('work.list')->with('error', 'Project updation failed');
            }
        } else {
            return redirect()->route('work.list')->with('error', 'Project updation failed');
        }
    }
}
