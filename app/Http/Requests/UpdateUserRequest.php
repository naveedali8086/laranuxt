<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|max:50',
            'phone_number' => 'bail|sometimes|nullable',
            'country_id' => 'required|exists:countries,id',
            'city' => 'required|max:50',
            'professional_summary' => 'bail|sometimes|nullable',
        ];
    }
}
