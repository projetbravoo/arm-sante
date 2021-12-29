<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Patient;
use App\Services\Users\PatientService;
use App\Services\UserService;

class PatientRegisterController extends Controller
{
    public function create()
    {
        return view('auth.patient-signup');
    }

    public function store(UserRequest $request, UserService $userService, PatientService $patientService)
    {
        $userService->createNewUser($request, Patient::class, $patientService);

        return redirect()->route('auth.login')->with('notify', ['Account created, check mail for activation.', 'success', 7000]);
    }
}
