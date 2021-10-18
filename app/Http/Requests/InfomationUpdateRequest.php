<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfomationUpdateRequest extends FormRequest
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
            'name' => ['required', 'min:5', 'max:30'],
            'dob' => ['required', "date"],
            'phone_number' => ['required', 'min: 10', "max:12"],
            'address' => ['required'],
            'introduction' => [],
        ];
    }

    public function messages()
    {
        return [];
    }
}
