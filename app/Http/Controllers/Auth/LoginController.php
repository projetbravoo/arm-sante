<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    protected function redirectTo()
    {
        if(Auth()->user()->profile == 'doctor') {
            return route('doctor.dashboard');
        } elseif(Auth()->user()->profile == 'patient') {
            return route('patient.dashoard');
        }
    }

    public function store(UserLoginRequest $request, UserService $userService)
    {
        $auth = $userService->login($request);

        if($auth === false) {
            return back()->with('error', 'Invalid email or password');
        }
        
        return $userService->getUserDashboardRoute(Auth::user())->with('notify', ['Login successfully', 'success', 3000]);
    }
}
