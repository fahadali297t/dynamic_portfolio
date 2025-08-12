<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ServicesController extends Controller
{
    public function getServicesPage()
    {
        $services = new Services();
        $data = Services::with('file_manager')->get();
        return view('admin.pages.services', ['data' => $data]);
        // return $data;
    }

    public function getAddServicePage()
    {
        return view('admin.pages.add_service');
    }

    // Pending to work
    public function addService(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:services,name',
            'short_description' => 'required|string|max:255',
            'description' => 'required',
            'image_id' => 'required',
        ]);



        if ($data) {
            Services::create([
                'name' => $data['name'],
                'status' => 'Published',
                'short_description' => $data['short_description'],
                'description' => $data['description'],
                'file_manager_id' => $data['image_id'],

            ]);
            return redirect()->route('services.list')->with('success', 'Service Added Successfully');
        } else {
            return redirect()->route('service.new');
        }
    }

    // to delete

    public function  delService(Request $request)
    {
        $id =  $request->id;
        $service = Services::findorfail($id);
        if ($service) {
            $service->delete();
            return redirect()->route('services.list')->with('success', 'Service Deleted Successfully');
        } else {
            return redirect()->route('services.list')->with('error', 'We are facing issue deleting this Service');
        }
    }


    // Get Update page

    public function editService(Request $request)
    {
        $data = Services::with('file_manager')->findorfail($request->id);

        if ($data) {
            return view('admin.pages.edit_service', ['data' => $data]);
        } else {
            return redirect()->route('services.list')->with('error', 'Service Not Found');
        }
    }


    // store updated one
    public function UpdateService(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', Rule::unique('services', 'name')->ignore($request->id)],
            'short_description' => 'required|string|max:255',
            'description' => 'required',
            'image_id' => 'required',
        ]);



        if ($data) {
            $service = Services::findorfail($request->id);
            $service->name = $request->name;
            $service->short_description = $request->short_description;
            $service->description = $request->description;
            $service->file_manager_id = $request->image_id;
            $service->save();

            return redirect()->route('services.list')->with('success', 'Service updated successfully');
        } else {
            return redirect()->route('service.new');
        }
    }
}
