<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;

class RegistrationRequest extends Request
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
            'name' => 'required|between:3,255',
            'password' => 'required|between:6,25',
            'email' => 'required|email|unique:users,email',
            'repeat_password' => 'required|same:password',
            'country' => 'required|exists:countries,id',
            'state' => 'required_if:country,840',
            'city' => 'required',
            'address' => 'required|between:3,255',
            'ZIP' => 'required',
        ];
    }
}
