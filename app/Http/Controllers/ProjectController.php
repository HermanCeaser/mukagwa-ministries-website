<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function health()
    {
        $title = "Health";
        return view('pages.projects.health', compact('title'));
    }

    public function education()
    {
        $title = "Education";
        return view('pages.projects.education', compact('title'));
    }

    public function evangelism()
    {
        $title = "Evangelism";
        return view('pages.projects.evangelism', compact('title'));
    }

    public function leadership()
    {
        $title = "Leadership";
        return view('pages.projects.leadership', compact('title'));
    }
}
