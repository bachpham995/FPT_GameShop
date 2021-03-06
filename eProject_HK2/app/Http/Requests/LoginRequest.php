<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'emailLogin' => 'required',
            'passwordLogin' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'emailLogin.required' => 'Email can not blank!',
            'passwordLogin.required' => 'Password can not blank!'
        ];
    }

}
