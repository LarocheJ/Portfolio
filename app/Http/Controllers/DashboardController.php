<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Dashboard';
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard')->with(compact('projects', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add New Project';

        return view('projects.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'github' => 'string|nullable',
            'intro' => 'string|nullable',
            'challenge' => 'required',
            'solution' => 'required',
            'role' => 'string|nullable',
            'url' => 'string|nullable',
            'stack' => 'required',
            'thumb' => 'image|nullable|max:1999',
            'full' => 'image|nullable|max:1999',
            'featured' => 'nullable'
        ]);

        //Handle thumb image upload
        // if($request->hasFile('thumb')){
        //     $fileNameWithExt = $request->file('thumb')->getClientOriginalName();
        //     $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('thumb')->getClientOriginalExtension();
        //     $thumbFileNameToStore = $fileName.'_'.time().'.'.$extension;
        //     // $path = $request->file('thumb')->storeAs('public/thumbs', $thumbFileNameToStore);
            
        //     // Storage::disk('s3')->put('thumbs', file_get_contents($request->file('thumb')));
        // } else {
        //     $thumbFileNameToStore = 'noimage.jpg';
        // }

        // $path = $request->file('thumb')->storeAs('public/thumbs', 's3');

        // $thumb = Project::create([
        //     'thumb' => basename($path),
        //     // 'url' => ->url($path)
        // ]);

        $path = $request->file('thumb')->store('thumbs', 's3');

        // Handle full image upload
        // if($request->hasFile('full')){
        //     $fileNameWithExt = $request->file('full')->getClientOriginalName();
        //     $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('full')->getClientOriginalExtension();
        //     $fullFileNameToStore = $fileName.'_'.time().'.'.$extension;
        //     $path = $request->file('full')->storeAs('public/full', $fullFileNameToStore); 

        // } else {
        //     $fullFileNameToStore = 'noimage.jpg';
        // }

        $full_path = $request->file('full')->store('full', 's3');

        // Create Project
        $project = new Project;
        $project->title = $request->input('title');
        $project->sub_title = $request->input('subtitle');
        $project->slug = $request->input('slug');

        if(empty($request->input('intro'))){
            $project->intro = '';
        } else {
            $project->intro = $request->input('intro');
        }

        if(empty($request->input('github'))){
            $project->github = '';
        } else { 
            $project->github = $request->input('github');
        }

        $project->challenge = $request->input('challenge');
        $project->solution = $request->input('solution');

        if(empty($request->input('url'))){
            $project->url = "";
        } else {
            $project->url = $request->input('url');
        }

        $project->stack = $request->input('stack');
        // $project->thumb = $thumbFileNameToStore;
        $project->thumb = $path;
        // $project->full = $fullFileNameToStore;
        $project->full = $full_path;
        
        if(empty($request->input('featured'))){
            $project->featured = 'no';
        } else {
            $project->featured = 'yes';
        }

        if(empty($request->input('role'))){
            $project->role = '';
        } else {
            $project->role = $request->input('role');
        }
        
        $project->save();

        return redirect('/dashboard')->with('success', 'Project Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $title = 'Project Details';
    //     $project = Project::findOrFail($id);

    //     return view('projects.show')->with(compact('project', 'title'));
    // }

    public function edit($id)
    {
        $title = 'Edit';
        $project = Project::findOrFail($id);

        return view('projects.edit')->with(compact('project', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'github' => 'string|nullable',
            'intro' => 'string|nullable',
            'challenge' => 'required',
            'solution' => 'required',
            'role' => 'string|nullable',
            'url' => 'string|nullable',
            'stack' => 'required',
            'thumb' => 'image|nullable|max:1999',
            'full' => 'image|nullable|max:1999',
            'featured' => 'nullable',
        ]);

        // Handle thumb image upload
        if($request->hasFile('thumb')){
            $fileNameWithExt = $request->file('thumb')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumb')->getClientOriginalExtension();
            $thumbFileNameToStore = $fileName.'.'.$extension;
            $path = $request->file('thumb')->storeAs('public/thumbs', $thumbFileNameToStore);
        } else {
            $thumbFileNameToStore = 'noimage.jpg';
        }

        // Handle full image upload
        if($request->hasFile('full')){
            $fileNameWithExt = $request->file('full')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('full')->getClientOriginalExtension();
            $fullFileNameToStore = $fileName.'.'.$extension;
            $path = $request->file('full')->storeAs('public/full', $fullFileNameToStore);
        } else {
            $fullFileNameToStore = 'noimage.jpg';
        }

        // Update Project
        $project = Project::findOrFail($id);
        $project->title = $request->input('title');
        $project->sub_title = $request->input('subtitle');
        $project->slug = $request->input('slug');

        if(empty($request->input('intro'))){
            $project->intro = "";
        } else {
            $project->intro = $request->input('intro');
        }

        if(empty($request->input('github'))){
            $project->github = '';
        } else {
            $project->github = $request->input('github');
        }

        $project->challenge = $request->input('challenge');
        $project->solution = $request->input('solution');

        if(empty($request->input('url'))){
            $project->url = "";
        } else {
            $project->url = $request->input('url');
        }

        $project->stack = $request->input('stack');

        if ($request->hasFile('thumb')) {
            Storage::delete('public/thumbs/' . $project->thumb);
            $project->thumb = $thumbFileNameToStore;
        }

        if ($request->hasFile('full')) {
            Storage::delete('public/full/' . $project->full);
            $project->full = $fullFileNameToStore;
        }

        if(empty($request->input('featured'))){
            $project->featured = 'no';
        } else {
            $project->featured = 'yes';
        }
        
        if(empty($request->input('role'))){
            $project->role = '';
        } else {
            $project->role = $request->input('role');
        }

        $project->save();

        return redirect('/dashboard')->with('success', 'Project Updated');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->title;

        if($project->thumb != 'noimage.jpg'){
            Storage::delete('/public/thumbs/'.$project->thumb);
        }

        Storage::delete('/public/thumbs/'.$project->full);
        
        $project->delete();

        return redirect('/dashboard')->with('success', '"'.$project->title.'" has been deleted');
    }
}
