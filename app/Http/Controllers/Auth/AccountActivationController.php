<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;

class AccountActivationController extends Controller
{
    public function update(User $user, string $token)
    {
        $isAccountActivated = UserService::activateUserAccount($user, $token);

        if($isAccountActivated === true) {
            return redirect()->route('auth.login')->with('notify', ['Account activated', 'success']);
        }
        return redirect()->route('auth.login')->with('notify', ['Invalid parameters', 'error']);
    }
}
