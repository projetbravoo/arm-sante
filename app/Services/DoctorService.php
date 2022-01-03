<?php

namespace App\Services;

use App\Http\Requests\DoctorUpdateRequest;
use App\Http\Requests\UserRequest;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DoctorService {

    public function createNewDoctor(string $speciality): Doctor
    {
        return Doctor::create([
            'speciality' => $speciality
        ]);
    }

    public function updateDoctorProfile(DoctorUpdateRequest $request, int $id): bool
    {
        User::where('userable_id', $id)
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

        return Doctor::find($id)->update([
            'speciality' => $request->speciality,
            'biography' => $request->biography,
            'clinic_name' => $request->clinic_name,
            'clinic_address' => $request->clinic_address,
            'price' => ($request->rating_option == 'custom_price') ? (int)$request->custom_rating_count : 0,
            'services' => $request->services,
            'specialization' => $request->specialist,
            'education' => json_encode([$request->degree, $request->institute, $request->completion_year])
        ]);
    }

    public function getEducation(?string $property): ?string
    {
        if (Auth()->user()->userable->education !== null) {
            $education = json_decode(Auth()->user()->userable->education);
    
            return match($property) {
                'degree' => $education[0],
                'institute' => $education[1],
                'completion_year' => $education[2]
            };
        }
        return null;
    }

    public function getDoctorServices(string $services): array
    {
        return explode(',', $services);
    }

    public function getSpecialities(): Collection
    {
        return DB::table('specialities')->get();
    }

    public function getSpecialitiesAsOptionsForDropDown(): void
    {
        foreach($this->getSpecialities() as $speciality)
        {
            echo '<option value="' . $speciality->id . '">'. $speciality->name . '</option>';
        }
    }
}