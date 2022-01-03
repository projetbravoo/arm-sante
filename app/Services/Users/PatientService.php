<?php

namespace App\Services\Users;

use App\Http\Requests\PatientUpdateRequest;
use App\Http\Requests\UserRequest;
use App\Models\Patient;
use App\Models\User;

class PatientService {
    public function createNewPatient(string $date_of_birth): Patient
    {
        return Patient::create([
            'date_of_birth' => $date_of_birth
        ]);
    }

    public function updatePatientProfile(PatientUpdateRequest $request, int $id): bool
    {
        User::where('userable_id', $id)
            ->where('userable_type', Patient::class)
            ->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
        ]);

        return Patient::find($id)->update([
            'date_of_birth' => $request->date_of_birth,
            'blood_group' => $request->blood_group,
        ]);
    }
}