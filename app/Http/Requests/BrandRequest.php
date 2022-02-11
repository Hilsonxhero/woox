<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
                'title' => ['required', 'unique:brands,title', 'min:3', 'string'],
                'link' => ['required', 'min:3', 'string'],
                'category_id' => ['required', 'exists:categories,id'],
                'thumb' => ['nullable', 'file', 'mimes:png,jpg,jpeg,gif'],
            ];
        }


        return [
            'title' => ['required', 'min:3', 'string', Rule::unique('brands', 'title')->ignore(request()->id)],
            'link' => ['required', 'min:3', 'string'],
            'category_id' => ['required', 'exists:categories,id'],
            'thumb' => ['nullable', 'file', 'mimes:png,jpg,jpeg,gif'],
        ];
    }
}
