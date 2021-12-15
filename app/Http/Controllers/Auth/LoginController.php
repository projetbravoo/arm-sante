<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function store(UserLoginRequest $request, UserService $userService)
    {
        $auth = $userService->login($request);

        if($auth === false) {
            return back()->with('error', 'Invalid email or password');
        }
        
        return redirect()->route('home')->with('notify', ['Login successfully', 'success', 3000]);
    }
}
