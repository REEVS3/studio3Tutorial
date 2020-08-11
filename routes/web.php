<?php

use Illuminate\Support\Facades\Route;

// syntax: 'ControllerName@MethodName'

Route::get('/','PagesController@index')->name('pages.index');
Route::get('/about','PagesController@about')->name('pages.about');
