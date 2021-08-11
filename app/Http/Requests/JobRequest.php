<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug'              => 'unique:slug',
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
