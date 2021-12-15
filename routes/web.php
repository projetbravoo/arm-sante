<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::view('/','welcome')->name('home');


Route::get('/auth/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/auth/logout', [LogoutController::class, 'logout'])->name('auth.logout');

Route::get('/auth/signup', [RegisterController::class, 'index'])->name('register');
Route::post('/auth/signup', [RegisterController::class, 'create'])->name('register.create');

Route::get('/auth/activation/{user}/{token}', [RegisterController::class, 'activate'])->name('auth.activate');