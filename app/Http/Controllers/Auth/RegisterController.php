<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Services\DoctorService;
use App\Services\UserService;

class RegisterController extends Controller
{

    public function __construct(private UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('auth.doctor-signup');
    }

    public function create(UserRequest $request, DoctorService $doctorService)
    {
        $newUser = $this->userService->createDoctorUser($request, $doctorService);

        if($newUser) {
            return redirect()->route('auth.login')->with('notify', ['Account created, check mail for activation.', 'success', 7000]);
        }
    }

    public function activate(User $user, string $token)
    {
        $isAccountActivated = $this->userService->activateUserAccount($user, $token);

        if($isAccountActivated === true) {
            return redirect()->route('auth.login')->with('notify', ['Account activated', 'success']);
        }
        return redirect()->route('auth.login')->with('notify', ['Invalid parameters', 'error']);
    }
}
