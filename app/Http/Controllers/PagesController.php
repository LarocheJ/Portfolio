<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;


class PagesController extends Controller
{
    public function index() {
        $projects = Project::orderBy('updated_at', 'desc')->get();
        $title = 'Home';

        return view('pages.index')->with(compact('projects', 'title'));
    }

    public function work() {
        $projects = Project::orderBy('updated_at', 'desc')->get();
        $title = 'Work';

        return view('pages.work')->with(compact('title', 'projects'));
    }

    public function about() {
        $title = 'About';

        return view('pages.about')->with('title', $title);
    }

    // public function contact() {
    //     $title = 'Contact';
        
    //     return view('pages.contact')->with('title', $title);
    // }

    public function show($slug)
    {
        $project = Project::whereSlug($slug)->first();
        $title = $project->title;

        return view('projects.show')->with(compact('project', 'title'));
    }

    public function download() {
        $file = public_path().'/files/jlaroche_resume_2020.pdf';
        return response()->download($file);
    }

}
