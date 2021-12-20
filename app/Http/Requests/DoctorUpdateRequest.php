<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorUpdateRequest extends FormRequest
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
            'first_name' => 'filled|min:3',
            'last_name' => 'filled|min:3',
            'email' => 'filled',
            'gender' => 'filled',
            'phone_number' => 'nullable|numeric',
            
            'country' => 'required_with_all:state,city',
            'state' => 'required_with_all:country,city',
            'city' => 'required_with_all:country,state',
            
            //'clinic_name' => 'require_with:clinic_address',
            'clinic_address' => 'required_with:clinic_name',
            
            'custom_rating_count' => 'nullable|required_if:rating_option,custom_price|numeric',

            'degree' => 'required_with_all:institute,completion_year',
            'institute' => 'required_with:degree',
            'completion_year' => 'nullable|required_with_all:degree,institute'
        ];
    }
}
