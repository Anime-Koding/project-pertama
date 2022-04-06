<?php

namespace App\Http\Requests\Interest;

use Illuminate\Foundation\Http\FormRequest;

class StoreInterestRequest extends FormRequest
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
            "title" => ['required'],
            "icon" => ['required'],
            "details" => ['required'],
            "order" => ['required'],
            "status" => ['required'],
            "group" => ['required'],
            "group.*" => ['required'],
        ];
    }
}
