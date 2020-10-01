<?php

use Illuminate\Support\Facades\Route;

Route::get('/{tag?}', 'JobsController@index');
Route::get('/job/create', 'JobsController@create')->middleware(['auth']);
Route::get('/job/{id}', 'JobsController@show');
Route::post('/job/store', 'JobsController@store')->middleware(['auth']);