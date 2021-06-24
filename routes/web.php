<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/user/login',[AuthController::class,'login'])->name('login.post');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::post('/user/signup',[AuthController::class,'register'])->name('signup.post');


Route::get('/catalogo', function () {
    return view('catalogue');
})->name('catalogue');

Route::get('/destino', function () {
    return view('dest');
})->name('destino');

Route::get('/paquetes', function () {
    return view('packs');
})->name('packs');

Route::get('/reviews',[PackageController::class,'showAll'], function () {
    return view('reviews');
})->name('reviews');

Route::post('/user/login',[AuthController::class,'login'])->name('login.post');

Route::get('/home', function () {
    return view('home');
})->name('home');

