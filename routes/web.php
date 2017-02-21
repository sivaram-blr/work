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

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('user', function ($id) {
    return 'User '.$id;
});

Route::bind('user', function ($id) {
    return 'User test '.$id;
});

Route::resource('category', 'CategoryController');
Route::resource('product','ProductController');


Route::get('category/images/{image}', function($image = null)
{
    $path = storage_path().'/app/public/category/images/' . $image;
    if (file_exists($path)) { 
        return Response::file($path);
    }
});
