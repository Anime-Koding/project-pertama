<?php

namespace App\Http\Requests\Reference;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReferenceRequest extends FormRequest
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
            "name" => ['required'],
            "phone" => ['required'],
            "email" => ['required','email'],
            "details" => ['required'],
            "order" => ['required'],
            "status" => ['required'],
            "group" => ['required'],
            "group.*" => ['required'],
        ];
    }
}
