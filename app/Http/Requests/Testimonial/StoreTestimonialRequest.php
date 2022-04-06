<?php

namespace App\Http\Requests\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonialRequest extends FormRequest
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
            "feedback_title" => ['required'],
            "client_name" => ['required'],
            "image" => ['nullable','image'],
            "status" => ['required'],
            "feedback" => ['required'],
            "group" => ['required'],
            "group.*" => ['required'],
        ];
    }
}
