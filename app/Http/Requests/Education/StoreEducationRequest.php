<?php

namespace App\Http\Requests\Education;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducationRequest extends FormRequest
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
            "degree_name" => ['required'],
            "institution_name" => ['required'],
            "from_date" => ['required'],
            "to_date" => ['exclude_if:is_present,1','required'],
            "detail" => ['required'],
            "status" => ['required'],
            "is_present" => ['nullable'],
            "group.*" => ['required'],
            "group" => ['required'],
        ];
    }
}
