<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/menu-package', function () {
    return view('package');
});
Route::get('/Testimonial', function () {
    return view('testimoni');
});
Route::get('/Galery', function () {
    return view('galery');
});
Route::get('/Contac', function () {
    return view('contac');
});
Route::get('/about', function () {
    return view('about', [
        "name" => "Alfi Khaerin",
        "email" => "alfi@gmai.com",
        "image" => "img1.png"
    ]);
});

Route::get('/post', function () {
    return view('post');
});
