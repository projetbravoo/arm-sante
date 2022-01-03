<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientUpdateRequest;
use App\Services\Users\PatientService;
use Illuminate\Support\Facades\Auth;

class PatientProfileSettingController extends Controller
{
    public function edit()
    {
        return view('patient.profile-settings', [ 'patient' => Auth::user() ]);
    }

    public function update(PatientUpdateRequest $request, PatientService $patientService)
    {
        $patientProfileUpdated = $patientService->updatePatientProfile($request, Auth::user()->userable->id);

        if($patientProfileUpdated) {
            return redirect()->route('patient.dashboard')->with('notify', ['Profile Updated', 'success']);
        }
        return back()->with('notify', ['Unable to update profile', 'error']);
    }
}
