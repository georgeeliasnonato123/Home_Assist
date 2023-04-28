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
    return view('welcome');
});

//inicio pagina de login
Route::get('/', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
//fim pagina login

//inicio pagina criar usuario
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create.form');
Route::post('/user', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
//fim pagina criar usuario

//pagina inicial home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


