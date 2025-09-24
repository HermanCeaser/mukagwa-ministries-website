<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $title = "About Us";
        $aboutPage = null;
        $teamMembers = collect([]);
        
        return view('pages.about', compact('title', 'aboutPage', 'teamMembers'));
    }
}
