<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostControllers;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardPostController;


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
    return view('index', [
        "title" => "Home"
    ]);
});
Route::get('/menu-package', function () {
    return view('package', [
        "title" => "menu Package"
    ]);
});
Route::get('/Testimonial', function () {
    return view('testimoni', [
        "title" => "testimoni"
    ]);
});
Route::get('/Galery', function () {
    return view('galery', [
        "title" => "galery"
    ]);
});
Route::get('/Contac', function () {
    return view('contac', [
        "title" => "contac"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Alfi Khaerin",
        "image" => "img1.png"
    ]);
});


Route::get('/posts', function () {
    return view('posts', []);
});

Route::get('/articel', function () {
    return view('articel', [
        "title" => "articel"
    ]);
});


Route::get('/blog', [PostControllers::class, 'index']);
//halaman single post
Route::get('posts/{post:slug}', [PostControllers::class, 'show']);

Route::get('/login-admin', [LoginController::class, 'index'])->name('login');
Route::post('/login-admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
