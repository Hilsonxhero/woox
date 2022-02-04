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
        return [
            'username' => ['required'],
            'phone' => ['nullable', new ValidMobile(), Rule::unique('users', 'phone')->ignore(request()->id)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'email' => ['required', 'email'],
            'national_number' => ['required'],
            'avatar' => ['nullable', 'file'],
            'status' => ['required', Rule::in(User::$statuses)],
        ];
    }
}
