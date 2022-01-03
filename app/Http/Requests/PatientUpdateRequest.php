<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'filled',
            'last_name' => 'filled',
            'email' => 'filled|email',
            'gender' => 'filled',
            'date_of_birth' => 'filled',
            'phone_number' => 'nullable|numeric',
            
            'country' => 'required_with_all:state,city',
            'state' => 'required_with_all:country,city',
            'city' => 'required_with_all:country,state',
        ];
    }
}
