<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailIdiomRequest extends FormRequest
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
			'idiom_id' => 'required',
			'english' => 'required|string',
			'indonesia' => 'required|string',
        ];
    }
}
