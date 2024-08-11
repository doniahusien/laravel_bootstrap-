<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title"=>["required","max:255","min:3","unique:posts"],
            "body"=>["min:4","required"],
        ];
    }
    public function messages(): array
    {
        return [
            "title.required"=>"title is required",
            "title.max"=>"title max",
            "title.min"=>"title min",
            "title.unique"=>"title is unique",
            "body.required"=>"a body is required",
        ];
    }
}
