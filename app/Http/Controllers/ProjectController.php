<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($project)
    {
        // $project will be the slug, e.g. "sofitel-phnom-penh-phokeethra"
        // Look it up from a DB table, config array, or JSON file of projects.

        return view('professional.project-show', compact('project'));
    }
}
