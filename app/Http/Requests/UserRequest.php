<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\ValidMobile;
use App\Rules\ValidPassword;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

        if (request()->isMethod('post')) {
            return [
                'username' => ['nullable'],
                'phone' => ['required', 'unique:users,phone', new ValidMobile()],
                'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
                'email' => ['nullable', 'email', 'unique:users,email'],
                'national_number' => ['nullable'],
                'avatar' => ['nullable', 'file'],
                'role' => ['nullable', 'exists:roles,name'],
                'status' => ['required', Rule::in(User::$statuses)],
            ];
        }


        return [
            'username' => ['required'],
            'phone' => ['required', new ValidMobile(), Rule::unique('users', 'phone')->ignore(request()->id)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'email' => ['nullable', 'email', Rule::unique('users', 'email')->ignore(request()->id)],
            'national_number' => ['nullable'],
            'avatar' => ['nullable', 'file'],
            'role' => ['nullable', 'exists:roles,name'],
            'status' => ['nullable', Rule::in(User::$statuses)],
        ];
    }
}
