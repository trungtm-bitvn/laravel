<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {

        $projects = Project::all();
        
        return view('cms.projects.index', compact('projects'));
    }

    public function form() {

        return view('cms.projects.form');
    }

    public function create(Request $request) {

        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        
        $project->save();
        
        return redirect('/cms/projects');
    }
}
