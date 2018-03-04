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



//Authentication Routes
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

//Application Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reports', 'HomeController@reports')->name('reports');
Route::get('/logout', 'HomeController@logout')->name('logout');

