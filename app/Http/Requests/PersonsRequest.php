<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonsRequest extends FormRequest
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
            // 'image_path'        => 'required', 
            'first_name'        => 'required',
            'middle_name'       => 'required',
            'last_name'         => 'required',
            'address'           => 'required',
            'street_code'       => 'required',
            'age'               => 'required',
            'birthday'          => 'required',
            'gender'            => 'required',
            'contact_no'        => 'required',
            'pwd'               => 'required',
            'osy'               => 'required'
        ];
    }

    public function messages()
    {
        return [
                // 'image_path.required'        => '', 
                'first_name.required'        => 'First Name is missing',
                'middle_name.required'       => 'Middle Name is missing',
                'last_name.required'         => 'Last Name is missing',
                'address.required'           => 'Address is missing',
                'street_code.required'       => 'Street code is missing',
                'age.required'               => 'Age is Missing',
                'birthday.required'          => 'Birthday is missing',
                'gender.required'            => 'Gender is missing',
                'contact_no.required'        => 'Contact No is missing',
                'pwd.required'               => 'Required',
                'osy.required'               => 'Required'
        ];
    }
}
