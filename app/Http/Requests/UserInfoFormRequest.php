<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoFormRequest extends FormRequest
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
            //
            'fname' => 'required|max:30|alpha_dash',
            'lname' => 'required|max:30|alpha_dash',
            'studentno' => 'required|regex:/^[s]{1}[3]{1}[0-9]{6}$/|unique:user_informations',
            'email' => 'required|email|unique:user_informations',
        ];
    }
}
