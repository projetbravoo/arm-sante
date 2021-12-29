<?php

namespace App\Http\Controllers\Auth;

use App\Services\UserService;
use App\Services\DoctorService;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Models\Doctor;

class DoctorRegisterController extends Controller
{
    public function create()
    {
        return view('auth.doctor-signup');
    }

    public function store(UserRequest $request, UserService $userService, DoctorService $doctorService)
    {
        $newDoctor = $userService->createNewUser($request, Doctor::class, $doctorService);

        if($newDoctor) {
            return redirect()->route('auth.login')->with('notify', ['Account created, check mail for activation.', 'success', 7000]);
        } 
    }
}
