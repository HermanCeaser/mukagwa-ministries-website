<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $title = "Contact Us";
        return view('pages.contact', compact('title'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4|max:50',
            'email' => 'required|email',
            'subject' => 'required|string|min:4|max:50',
            'message' => 'required|min:10|max:250'
        ]);


        Contact::create($request->all());

        return redirect()->back()->with(['success' => 'Thank you for contacting us. We will get back to you Shortly']);


    }


}
