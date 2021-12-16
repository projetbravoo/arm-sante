<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request, UserService $userService)
    {
        $userService->logout($request);
        return redirect()->route('auth.login');
    }
}
