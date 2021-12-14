<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Laravolt\Avatar\Avatar;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Mail\AccountActivationEmail;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(UserRequest $request)
    {
        $config = include(config_path('laravolt/avatar.php'));
        
        $newUser = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'profile' => $request->profile,
            'password' => Hash::make($request->password),
            'avatar' => (new Avatar($config))->create($request->first_name . ' ' . $request->last_name)->save(storage_path('app/images/' . time() . '.png'))->basename,
            'verification_token' => Crypt::encryptString($request->email . ',' . $request->last_name . ',' . $request->gender)
        ]);

        Mail::to($newUser)
            ->send(new AccountActivationEmail($newUser));

        return redirect()->route('login')->with(['notify', 'success'], 'Account created, check mail for activation.');
    }

    public function activate(User $user, string $token)
    {
        if($user->status == '0' && !is_null($token) && !is_null($user->verification_token)) {
            $decryptedUserToken = Crypt::decryptString($user->verification_token);
            $decryptedToken = Crypt::decryptString($token);

            if($decryptedToken === $decryptedUserToken) {
                $user->update(['status' => '1', 'verification_token' => '']);
                return redirect()->route('login')->with(['notify', 'success'], 'Account activated');
            }
        }

        return redirect()->route('login')->with(['notify', 'error'], 'Invalid parameters');
    }
}
