<?php

namespace App\Services;

use App\Http\Requests\DoctorUpdateRequest;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DoctorService {

    public function updateProfile(DoctorUpdateRequest $request, int $id): bool
    {
        return User::find($id)
            ->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'speciality' => $request->speciality,
            'biography' => $request->biography,
            'clinic_name' => $request->clinic_name,
            'clinic_address' => $request->clinic_address,
            'price' => ($request->rating_option == 'custom_price') ? $request->custom_rating_count : 0,
            'services' => $request->services,
            'specialization' => $request->specialist
        ]);
    }

    public function getSpecialities()
    {
        return DB::table('specialities')->get();
    }

    public function getSpecialitiesAsOptionsForDropDown()
    {
        foreach($this->getSpecialities() as $speciality)
        {
            echo '<option value="' . $speciality->id . '">'. $speciality->name . '</option>';
        }
    }
}