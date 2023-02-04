<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntroPackageRequest extends FormRequest
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
            'id' => 'required',
            'n_title' => 'required',
            'n_detail' => 'required',
            'i_entry' => 'required',
            'd_entry' => 'required'
        ];
    }
}
