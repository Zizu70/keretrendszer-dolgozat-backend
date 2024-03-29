<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSandwichRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'type' => 'required|in:normal,vegan,glutenfree',
            'price' => 'required|numeric|integer|min:400 max:1000',
            'date_column' => 'required|date|date_format:Y-m-d|after_or_equal:2024-04-01|before_or_equal:2024-12-31'
        ];
    }
}
