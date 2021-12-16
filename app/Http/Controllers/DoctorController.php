<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function dashboard()
    {
        return view('doctor.dashboard');
    }

    public function settings()
    {
        return view('doctor.settings', [
            'user' => Auth::user()
        ]);
    }
}
