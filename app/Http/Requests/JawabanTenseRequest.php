<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JawabanTenseRequest extends FormRequest
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
            'user_id' => 'string',
            'tugas_tenses_id' => 'required',
            'body_answers' => 'required|string',
        ];
    }
}
