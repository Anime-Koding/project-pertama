<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
            "service_name" => ['required'],
            "icon" => ['nullable'],
            "details" => ['nullable'],
            "image" => ['nullable','image'],
            "status" => ['required'],
            "group.*" => ['required'],
            "group" => ['required'],
        ];
    }
}
