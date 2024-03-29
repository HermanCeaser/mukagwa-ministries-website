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
        $request->validate([
            'currency' => 'required',
            'amount' => ['required','regex:/^\d{1,3}(,\d{3})*(\.\d{2})?$/'], // Validates currency amount
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'nullable',
            'address' => 'nullable',
            'comment' => 'nullable',
            'country' => 'required',
        ]);
        dd($request->all());
    }


    public function show($id)
    {
        //
    }


}
