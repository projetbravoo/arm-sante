<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Laravolt\Avatar\Avatar;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(UserRequest $request)
    {
        $config = include(config_path('laravolt/avatar.php'));
        
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'profile' => $request->profile,
            'password' => Hash::make($request->password),
            'avatar' => (new Avatar($config))->create($request->first_name . ' ' . $request->last_name)->save(storage_path('app/images/' . time() . '.png'))->basename
        ]);

        return redirect('login');
    }
}
