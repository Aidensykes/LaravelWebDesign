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
        
        
        request()->validate([
        
        'projectname' => ['required','min:3'],
        'projectdescription' => ['required','max:255'],
        'linkto' => 'required',
        
        ]);
        
        
        $project->save();
        
        return redirect('/project');
        
    }
    
    
    public function show($id){
        
        $project = project::findOrFail($id);
        return view('show',compact('project'));
        
}
    
     public function edit($id){
        
        $project = project::findOrFail($id);
        return view('edit',compact('project'));
        
}
        
     public function update(){
         
        $project = project::findOrFail($id);
         
        $project->projectname = request ('projectname');
        $project->projectdescription = request ('projectdescription');
        $project->linkto = request ('linkto');
        
        $project->save();
        
        return redirect('/project');
         
         
         
         
     }   
     
     public function destroy(){
         
        $project = project::findOrFail($id);
         
       project::find($id)->delete;
        
        return redirect('/project');
         
         
         
         
     }   
     
        
        
}
