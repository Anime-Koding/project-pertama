<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            "images" => ['nullable','image'],
            "blog_category_id" => ['required'],
            "url" => ['required','url'],
            "tags" => ['required'],
            "status" => ['required'],
            "description" => ['required'],
            "group" => ['required'],
            "group.*" => ['required'],
        ];
    }
}
