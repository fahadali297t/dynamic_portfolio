<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list()
    {
        $brands = Brand::with('file_manager')->orderBy('id', 'desc')->get();

        return view('admin.pages.brands', ['brands' => $brands]);
    }

    public function new()
    {
        return view('admin.pages.add_brand');
    }
    public function add(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image_id' => 'required'
        ]);

        if ($data) {
            Brand::create([
                'name' => $request->name,
                'file_manager_id' => $request->image_id,
            ]);

            return redirect()->route('brand.list')->with('success', 'Brand added successfully');
        } else {
            return redirect()->route('brand.new');
        }
    }
    public function del(Request $request)
    {
        $brand = Brand::findorfail($request->id);
        $brand->delete();
        return redirect()->route('brand.list')->with('success', 'Brand deleted successfully');
    }
    public function edit(Request $request)
    {
        $brand = Brand::findorfail($request->id);
        return view('admin.pages.edit_brand', ['brand' => $brand]);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image_id' => 'required'
        ]);

        if ($data) {
            $brand = Brand::findorfail($request->id);

            $brand->name = $request->name;
            $brand->file_manager_id = $request->image_id;
            $brand->save();
            return redirect()->route('brand.list')->with('success', 'Data Updated successfully');
        } else {
            return redirect()->route('brand.list')->with('error', 'Data Update Failure');
        }
    }
}
