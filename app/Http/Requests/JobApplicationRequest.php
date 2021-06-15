<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobApplicationRequest extends FormRequest
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
            'fullname'                  => 'required',
            'firstname'                 => 'required',
            //'lastname'                  => 'required',
            'dob'                       => 'required|date',
            'pob'                       => 'required',
            'sex'                       => 'required',
            'education'                 => 'required',
            'weight'                    => 'numeric',
            'height'                    => 'numeric',
            'id_card_address'           => 'required',
            'present_address'           => 'required',
            'phone_number'              => 'required',
            'email'                     => 'required|email',
            'id_card_number'            => 'required|numeric',
            'tax_id_card_number'        => 'numeric',
            'social_security_number'    => 'numeric',
            'cv'                        => 'required|mimetypes:application/pdf,application/msword'
        ];
    }
}
