<?php

namespace App\Http\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePortfolioRequest extends FormRequest
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
            "portfolio_category_id" => ["required"],
            "project_name" => ["required"],
            "project_url" => ["required","url"],
            "from_date" => ["required"],
            "to_date" => ["nullable"],
            "image" => ["nullable","image"],
            "details" => ["nullable"],
            "order" => ["required"],
            "status" => ["required"],
            "group.*" => ['required'],
            "group" => ['required'],
        ];
    }
}
