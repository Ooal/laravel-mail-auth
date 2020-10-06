<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', 'GuestController@index')->name('index');
Route::get('/show/{id}', 'GuestController@show')->name('show');
Route::get('/destroy/{id}', 'LoggedController@destroy')->name('destroy');
Route::get('/create', 'LoggedController@create')->name('create');
Route::post('/store', 'LoggedController@store')->name('store');
Route::get('/edit/{id}', 'LoggedController@edit')->name('edit');
Route::post('/update/{id}', 'LoggedController@update')->name('update');
