<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            "client_name" => ['required'],
            "url" => ['required'],
            "image" => ['nullable','image'],
            "status" => ['required'],
            "group" => ['required'],
            "group.*" => ['required'],
        ];
    }
}
