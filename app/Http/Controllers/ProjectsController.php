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
}
