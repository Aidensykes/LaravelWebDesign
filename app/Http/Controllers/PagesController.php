<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        
    //Route::get('/', function () {
    return view('welcome');
  
//});
        
    }
    
    public function about(){
        //Route::get('/about', function () {
    return view('about');
//});        
    }
    
    public function contact(){
    //Route::get('/contact', function () {
    return view('contact');
//});
    
        
    }
    
    public function grade(){
  

        return view('grade');
      
        
    }
    
    public function project(){
     //Route::get('/works', function () {
    return view('project');
//});   
        
    }
    
    public function todo(){
        //Route::get('/todo', function () {
      $tasks = [
                'Sending data to views - Done!',
                'Controllers - Done!',
                'Database integration through migrations and the Eloquent ORM - Done!',
                'Forms including CSRF protection and data modification - Done!',
                'Data cleansing and validation - Done!',
                'Registration and authentication',
                'Authorisation and Laravel Gate',
                'Move onto Checkpoint 2!'
            ];

return view('todo', [
'tasks' => $tasks,
'foo' => request('title')
]);
//});
        
    }
    
}
?>