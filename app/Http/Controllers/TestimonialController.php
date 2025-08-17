<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function getTestimonialPage()
    {
        $testimonial = new Testimonial();
        $data = $testimonial->with('file_manager')->get();
        return view('admin.pages.testimonials', ['data' => $data]);
    }

    public function getAddTestimonialPage()
    {
        return view('admin.pages.add_testimonials');
    }

    // Pending to work
    public function addTestimonial(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'rating' => 'required',
            'review' => 'required',
            'file_manager_id' => 'required'
        ]);



        if ($data) {


            $testimonial = new Testimonial();
            $testimonial::create($data);
            return redirect()->route('testimonial.list');
        } else {
            return redirect()->route('testimonial.new');
        }
    }

    // to delete

    public function  delTestimonial(Request $request)
    {


        Testimonial::findorfail($request->id)->delete();
        return redirect()->route('testimonial.list')->with('success', 'Testimonial Deleted');
    }


    // Get Update page

    public function getUpdateTestimonial(Request $request)
    {
        $data = Testimonial::with('file_manager')->findorfail($request->id);

        if ($data) {
            return view('admin.pages.edit_testimonials', ['data' => $data]);
        } else {
            return redirect()->route('testimonial.list')->with('error', 'Review Not Found');
        }
    }


    // store updated one
    public function UpdateTestimonial(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'position' => 'required',
            'rating' => 'required',
            'review' => 'required',
            'file_manager_id' => 'required'
        ]);



        if ($data) {



            $testimonial = Testimonial::findorfail($request->id);
            $testimonial->name = $data['name'];
            $testimonial->position = $data['position'];
            $testimonial->rating = $data['rating'];
            $testimonial->review = $data['review'];
            $testimonial->file_manager_id = $data['file_manager_id'];
            $testimonial->save();
            return redirect()->route('testimonial.list')->with('success', 'Testimonial Updated Successfully');
        } else {
            return redirect()->route('testimonial.list')->with('error', 'Internal Error');
        }
        return $request->all();
    }
}
