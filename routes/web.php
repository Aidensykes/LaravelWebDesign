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

Route::patch('/tasks/{task}','ProjectTasksController@update');
Route::post('/{project}/tasks','ProjectTasksController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');


$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');


$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');



?>







