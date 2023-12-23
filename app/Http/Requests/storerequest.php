<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storerequest extends FormRequest
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
            'first_title' => 'required|string|max:255',
            'second_title' => 'required|string|max:255',
            'slot' => 'required|string|max:255',
        ];
    }
}
