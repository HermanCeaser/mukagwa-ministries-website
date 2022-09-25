<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{

    public function index(): View
    {
        $title = "About Us";
        return view('pages.about', compact('title'));
    }
}
