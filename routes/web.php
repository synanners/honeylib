<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Authentication Routes
Auth::routes();

//Application Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reports', 'HomeController@reports')->name('reports');
Route::get('/logout', 'HomeController@logout')->name('logout');