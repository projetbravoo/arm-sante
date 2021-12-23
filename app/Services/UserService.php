<?php

namespace App\Services;

use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Laravolt\Avatar\Avatar;
use App\Http\Requests\UserRequest;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserService {

    public function createDoctorUser(UserRequest $request, DoctorService $doctorService): User
    {
        return $doctorService->createDoctor($request)->user()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'avatar' => $this->getUserAvatar($request->first_name . ' ' . $request->last_name),
            'verification_token' => $this->getVerificationToken($request->email . ',' . $request->last_name . ',' . $request->gender)
        ]);
    }

    public function activateUserAccount(User $user, string $token): bool
    {
        if($user->active == '0' && !is_null($token) && !is_null($user->verification_token)) {
            $tokensMatched = $this->verifyToken($user->verification_token, $token);
            
            if($tokensMatched) {
                $user->update(['active' => '1', 'verification_token' => '']);
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
        if(!Auth::attempt(Arr::add($request->only('email', 'password'), 'active', '1'))) {
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

    /********** 
     * Getters
    **********/

    public function getUserAvatar(string $username): string
    {
        $config = include(config_path('laravolt/avatar.php'));
        return (new Avatar($config))->create($username)->save(public_path('assets/img/avatar/' . time() . '.png'))->basename;
    }

    public function getVerificationToken(string $data): string
    {
        return Crypt::encryptString($data);
    }

    public function getUserDashboardRoute(User $user): RedirectResponse
    {
        if ($user->userable instanceof Doctor) {
            return redirect()->route('doctor.dashboard');
        } elseif ($user->userable instanceof Patient) {
            return redirect()->route('patient.dashboard');
        }
    }

}