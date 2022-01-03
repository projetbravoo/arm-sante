<?php

use App\Http\Controllers\Auth\AccountActivationController;
use App\Http\Controllers\Auth\DoctorRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\PatientRegisterController;
use App\Http\Controllers\Doctor\DoctorAvailabilityContoller;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Patient\PatientDashboardController;
use App\Http\Controllers\Patient\PatientProfileSettingController;
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
        Route::get('login', [LoginController::class, 'create'])->name('auth.login');
        Route::post('login', [LoginController::class, 'store']);

        Route::get('patient-signup', [PatientRegisterController::class, 'create'])->name('auth.patient.register');
        Route::post('patient-signup', [PatientRegisterController::class, 'store']);

        Route::get('doctor-signup', [DoctorRegisterController::class, 'create'])->name('auth.doctor.register');
        Route::post('doctor-signup', [DoctorRegisterController::class, 'store']);
        
        Route::get('activation/{user}/{token}', [AccountActivationController::class, 'update'])->name('auth.activate');
    });

    Route::post('logout', [LogoutController::class, 'logout'])->name('auth.logout');
});


//Doctor
Route::group(['prefix' => 'doctor', 'middleware' => ['auth', 'isDoctor', 'preventBackHistory']], function() {
    Route::get('/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');

    Route::get('profile', [DoctorController::class, 'profile'])->name('doctor.profile');
    Route::get('profile-settings', [DoctorController::class, 'settings'])->name('doctor.settings');
    Route::put('profile-settings', [DoctorController::class, 'update'])->name('doctor.update');

    Route::get('schedule-timings', [DoctorAvailabilityContoller::class, 'create'])->name('doctor.availability.create');
    Route::post('schedule-timings', [DoctorAvailabilityContoller::class, 'store'])->name('doctor.availability.store');
    Route::put('schedule-timings', [DoctorAvailabilityContoller::class, 'update'])->name('doctor.availability.update');
});


//Patient
Route::group(['prefix' => 'patient', 'middleware' => ['auth', 'isPatient', 'preventBackHistory']], function () {
    Route::get('dashboard', [PatientDashboardController::class, 'index'])->name('patient.dashboard');

    Route::get('profile-settings', [PatientProfileSettingController::class, 'edit'])->name('patient.edit');
    Route::put('profile-settings', [PatientProfileSettingController::class, 'update'])->name('patient.update');
});
