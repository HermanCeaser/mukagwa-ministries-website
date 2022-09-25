<?php

namespace App\Http\Controllers;

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
        //
    }


}
