<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function create()
    {
        $title="Make a Donation";
        return view('pages.donate', compact('title'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


}
