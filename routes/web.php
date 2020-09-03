<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'JobsController@index');
Route::get('/job/create', 'JobsController@create');
Route::get('/job/{id}', 'JobsController@show');
Route::post('/job/store', 'JobsController@store');