<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit_contact(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            Contact::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully!'
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        }
    }


    public function list()
    {
        $data = Contact::get();
        return view('admin.pages.contact-requests', ['data' => $data]);
    }

    public function view($id)
    {
        $data = Contact::findorfail($id);
        if ($data) {
            return view('admin.pages.single_contact-requests', ['data' => $data]);
        }
    }


    public function del(Request $request)
    {
        $data = Contact::findorfail($request->id);
        if ($data) {
            $data->delete();
            return redirect()->route('contact.list')->with('success', 'Record Deleted Successfully');
        }
    }
}
