<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TmgeneralPackageRequest extends FormRequest
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
            'n_title' => 'required:max:100',
            'n_detail' => 'required',
            'i_entry' => 'required:20',
            'd_entry' => 'required'
        ];
    }
}
