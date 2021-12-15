<?php

namespace App\Services;

use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Laravolt\Avatar\Avatar;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserService {

    public function create(UserRequest $request): User
    {
        return User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'profile' => $request->profile,
            'password' => Hash::make($request->password),
            'avatar' => $this->getUserAvatar($request->first_name . ' ' . $request->last_name),
            'verification_token' => $this->getVerificationToken($request->email . ',' . $request->last_name . ',' . $request->gender)
        ]);
    }

    public function getUserAvatar(string $username): string
    {
        $config = include(config_path('laravolt/avatar.php'));
        return (new Avatar($config))->create($username)->save(storage_path('app/images/' . time() . '.png'))->basename;
    }

    public function getVerificationToken(string $data): string
    {
        return Crypt::encryptString($data);
    }

    public function activateUserAccount(User $user, string $token): bool
    {
        if($user->status == '0' && !is_null($token) && !is_null($user->verification_token)) {
            $tokensMatched = $this->verifyToken($user->verification_token, $token);
            
            if($tokensMatched) {
                $user->update(['status' => '1', 'verification_token' => '']);
                return true;
            }
        }
        return false;
    }

    private function verifyToken(string $userToken, string $token): bool
    {
        $decryptedUserToken = Crypt::decryptString($userToken);
        $decryptedToken = Crypt::decryptString($token);

        if($decryptedToken === $decryptedUserToken) {
            return true;
        }
        return false;
    }

    public function login(UserLoginRequest $request): bool
    {
        if(!Auth::attempt(Arr::add($request->only('email', 'password'), 'status', '1'))) {
            return false;
        }

        $request->session()->regenerate();
        return true;
    }

    public function logout(Request $request): void
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

}