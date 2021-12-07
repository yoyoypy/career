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
            'firstname'                 => 'required',
            'dob'                       => 'required|date',
            'pob'                       => 'required',
            'sex'                       => 'required',
            'education'                 => 'required',
            'salary'                    => 'numeric|digits_between:7,9|required_if:employment,Full-time',
            'id_card_address'           => 'required',
            'present_address'           => 'required',
            'phone_number'              => 'required',
            'email'                     => 'required|email',
            'id_card_number'            => 'required|numeric|digits:16',
            'cv'                        => 'required|mimes:pdf|max:2000',
            'answers'                   => 'required'
        ];
    }
}
