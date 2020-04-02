<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', 'AppController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
