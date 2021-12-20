<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DoctorDashboardController;
use App\Http\Controllers\DoctorController;
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



//Auth
Route::group(['prefix' => 'auth', 'middleware' => 'preventBackHistory'], function() {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('login', [LoginController::class, 'index'])->name('auth.login');
        Route::post('login', [LoginController::class, 'store'])->name('auth.login.store');

        Route::get('signup', [RegisterController::class, 'index'])->name('auth.register');
        Route::post('signup', [RegisterController::class, 'create'])->name('auth.register.create');
        
        Route::get('activation/{user}/{token}', [RegisterController::class, 'activate'])->name('auth.activate');
    });

    Route::post('logout', [LogoutController::class, 'logout'])->name('auth.logout');
});


//Doctor
Route::group(['prefix' => 'doctor', 'middleware' => ['auth', 'isDoctor', 'preventBackHistory']], function() {
    Route::get('/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');

    Route::get('profile-settings', [DoctorController::class, 'settings'])->name('doctor.settings');
    Route::put('profile-settings', [DoctorController::class, 'update'])->name('doctor.update');
});
