<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;

class ProjectsController extends Controller
{
    
    public function __construct(){
        
        $this->middleware('auth')->except(['show']);
    }
    
    public function index(){
        
        
     //   auth()->id()
      //  auth()->user()
       // auth()->check()
        
        $projects = Project::where('owner_id',auth()->id())->get();
        
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
        
        
        $attributes = request()->validate([
                'projectname' => ['required','min:3'],
        'projectdescription' => ['required','max:255'],
        'linkto' => 'required',
        
        ]);
        
        Project::create($attributes + ['owner_id'=> auth()->id()]);

        
        return redirect('/project');
        
    }
    
    
    public function show(Project $project){
        
        
       // abort_unless(\Gate::allows('update',$project),403);
       
       $this=>authorize('update',$project);
        
        auth()=>user()=>cannot('update',$project);
        
        
        return view('show',compact('project'));
        
}
    
     public function edit($id){
        
        $project = project::findOrFail($id);
        return view('edit',compact('project'));
        
}
        
     public function update(){
         
         $this->authorize('update',$project);
         
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
