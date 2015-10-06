<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products','ProductController');
Route::resource('recipes','RecipeController');
Route::resource('api/products','API\ProductAPIController');
Route::resource('api/recipes','API\RecipeAPIController');
Route::resource('fileentries', 'FileController');