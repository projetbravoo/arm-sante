<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Services\UserService;

class RegisterController extends Controller
{

    public function __construct(private UserService $user)
    {
        $this->userService = $user;
    }

    public function index()
    {
        return view('auth.register');
    }

    public function create(UserRequest $request)
    {
        $newUser = $this->userService->create($request);

        if($newUser) {
            return redirect()->route('login')->with('notify', ['Account created, check mail for activation.', 'success', 7000]);
        }
    }

    public function activate(User $user, string $token)
    {
        $isAccountActivated = $this->userService->activateUserAccount($user, $token);

        if($isAccountActivated === true) {
            return redirect()->route('login')->with('notify', ['Account activated', 'success']);
        }
        return redirect()->route('login')->with('notify', ['Invalid parameters', 'error']);
    }
}
