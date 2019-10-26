<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
//Route::get('/grades', function () { return view('grades'); }); //This is equivalent to the line below
Route::get('/grade','PagesController@grade');
Route::get('/project','PagesController@project');
Route::get('/todo','PagesController@todo');

Route::get('/project','ProjectsController@index');
Route::post('/project','ProjectsController@store');
Route::get('/create','ProjectsController@create');


Route::get('/{project}/show','ProjectsController@show');
Route::get('/{project}/edit','ProjectsController@edit');







?>






