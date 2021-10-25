<?php

namespace App\Http\Requests;

use App\Branch;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BranchRequest extends FormRequest
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
            'branch'    => 'required',
            'pic'       => 'required',
            'pic_phone' => 'required|numeric',
            'address'   => 'required'
        ];
    }
}
