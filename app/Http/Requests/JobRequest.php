<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Collection;

class JobRequest extends FormRequest
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
            'jobtitle'          => 'required',
            'jobdescription'    => 'required',
            'jobrequirement'    => 'required',
            'joblocation_id'    => 'required',
            'jobcategory_id'    => 'required',
            'employment'        => 'required',
            'skill'             => 'required',
            'position'          => 'required',
            'start'             => 'required',
            'status'            => 'required'
        ];
    }
}
