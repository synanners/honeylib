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


//
//// Home/Base routes
//Route::get('/home', 'HomeController@index')->name('home');
//Auth::routes();
//
//Route::get('/', 'HomeController@index')->name('home');
//Route::get('logout-user','HomeController@doLogoutUser');
//
////LabPc routes **controller @ App/Http/Controllers
//Route::get('Labpc/', 'LabpcController@list_all');
//Route::get('Labpc/{id}','LabpcController@show_by_id');
//Route::post('Labpc/','LabpcController@create');
//Route::put('Labpc/{id}', 'LabpcController@update' );
//Route::delete('Labpc/', 'LabpcController@destroy'),
//
////ReservationLog routes
//Route::get('Labpc/', 'LabpcController@list_all');
//Route::get('Labpc/{id}','LabpcController@show_by_id');
//Route::post('Labpc/','LabpcController@create');
//Route::put('Labpc/{id}', 'LabpcController@update' );
//Route::delete('Labpc/', 'LabpcController@destroy');

//Students routes
//Route::get('list-students/', 'LabpcController@list_all');
Route::get('student-by-id/{id}','StudentsController@show_by_id');
Route::post('create-student/','StudentsController@create');
Route::post('do-create-student','StudentsController@do_create');
Route::put('update-student/{id}', 'StudentsController@update' );
Route::put('do-update-student/{id}', 'StudentsController@do_update' );
Route::delete('Students/{id}', 'StudentsController@destroy');