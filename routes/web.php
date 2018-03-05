<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('api/users/{id}', 'HomeController@show');

//Authentication Routes
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

//Application Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reports', 'HomeController@reports')->name('reports');
Route::get('/logout', 'HomeController@logout')->name('logout');

//Students routes
//Route::get('list-students/', 'LabpcController@list_all');
Route::get('student-by-id/{id}','StudentsController@show_by_id');
Route::post('create-student/','StudentsController@create');
Route::post('do-create-student','StudentsController@do_create');
Route::put('update-student/{id}', 'StudentsController@update' );
Route::put('do-update-student/{id}', 'StudentsController@do_update' );
Route::delete('Students/{id}', 'StudentsController@destroy');
