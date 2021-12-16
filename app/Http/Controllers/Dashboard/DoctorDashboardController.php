<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    public function dashboard()
    {
        return view('doctor.index');
    }
}
