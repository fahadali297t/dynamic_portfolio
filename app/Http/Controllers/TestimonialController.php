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
        $data = $testimonial::get();
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
            'image' => 'required|max:2048'
        ]);



        if ($data) {

            if ($request->hasFile('image')) {
                $fileName = time() . '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('photos', $fileName, 'public');
                $data['image'] = $fileName;
                $testimonial = new Testimonial();
                $testimonial::create($data);
                return redirect()->route('testimonial.list');
            } else {
                return redirect()->route('testimonial.new');
            }
        } else {
            return redirect()->route('testimonial.new');
        }
    }

    // to delete

    public function  delTestimonial(Request $request)
    {

        if ($request->img && Storage::disk('public')->exists($request->img)) {
            Storage::disk('public')->delete($request->img);
            Testimonial::findorfail($request->id)->delete();
            return redirect()->route('testimonial.list')->with('success', 'Testimonial Deleted');
        } else {
            return redirect()->route('testimonial.list')->with('error', 'Something went Wrong');
        }
    }


    // Get Update page

    public function getUpdateTestimonial(Request $request)
    {
        $data = Testimonial::findorfail($request->id);

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
            'name' => 'required',
            'position' => 'required',
            'rating' => 'required',
            'review' => 'required',
            'image' => 'required|max:2048'
        ]);



        if ($data) {

            if ($request->hasFile('image')) {

                Storage::disk('public')->delete($request->old_image);

                $fileName = time() . '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('photos', $fileName, 'public');
                $data['image'] = $fileName;

                $testimonial = Testimonial::findorfail($request->id);
                $testimonial->name = $data['name'];
                $testimonial->position = $data['position'];
                $testimonial->rating = $data['rating'];
                $testimonial->review = $data['review'];
                $testimonial->image = $data['image'];
                $testimonial->save();

                return redirect()->route('testimonial.list');
            } else {
                return redirect()->route('testimonial.list');
            }
        } else {
            return redirect()->route('testimonial.list');
        }
    }
}
