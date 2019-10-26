<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;

class ProjectsController extends Controller
{
    public function index(){
        
        $projects = \App\project::all();
        
        return view('project',['projects' => $projects]);
        
    }
    
    public function create(){
        
        return view('create');
        
    }
    
    public function store(){
        
        $project = new Project();
        
        $project->projectname = request ('projectname');
        $project->projectdescription = request ('projectdescription');
        $project->linkto = request ('linkto');
        
        $project->save();
        
        return redirect('/project');
        
    }
}
