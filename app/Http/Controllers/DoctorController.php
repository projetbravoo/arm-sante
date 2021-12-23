<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorUpdateRequest;
use App\Models\Doctor;
use App\Services\DoctorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{

    public function __construct(private DoctorService $doctorService)
    {
        $this->doctorService = $doctorService;
    }

    public function dashboard()
    {
        return view('doctor.dashboard');
    }

    public function settings()
    {
        return view('doctor.settings', [
            'doctor' => Auth::user(),
            'doctorService' => $this->doctorService
        ]);
    }

    public function update(DoctorUpdateRequest $request)
    {
        $updateUser = $this->doctorService->updateDoctorProfile($request, Auth::user()->userable->id);

        if($updateUser) {
            return redirect()->route('doctor.dashboard')->with('notify', ['Profile Updated', 'success']);
        }

        return back()->with('notify', ['An error has occor', 'error']);
    }
}
