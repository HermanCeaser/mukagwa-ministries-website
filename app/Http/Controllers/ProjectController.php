<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{


    public function show($project)
    {
        return view('pages.projects.show', compact('project'));
    }


}
