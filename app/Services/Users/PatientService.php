<?php

namespace App\Services\Users;

use App\Http\Requests\UserRequest;
use App\Models\Patient;

class PatientService {
    public function createNewPatient(string $date_of_birth): Patient
    {
        return Patient::create([
            'date_of_birth' => $date_of_birth
        ]);
    }
}