<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('home', 'Frontend\HomeController');
    Route::resource('role', 'Frontend\RoleController');
    Route::resource('user', 'Frontend\UserController');
    Route::resource('category', 'Frontend\CategoryController');    
    Route::resource('product', 'Frontend\ProductsController');
});

Route::get('/', 'WelcomeController@index')->name('/');