<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Statamic\Facades\Entry;
use Statamic\Facades\Collection;

class AboutController extends Controller
{
    public function index(): View
    {
        // Get the About page from Statamic
        $aboutPage = Entry::findBySlug('about-us', 'pages');
        
        // Get team members from Statamic
        $teamMembers = Entry::whereCollection('team_members')
            ->where('published', true)
            ->orderBy('order', 'asc')
            ->get();
        
        $title = "About Us";
        
        return view('pages.about', compact('title', 'aboutPage', 'teamMembers'));
    }
}
