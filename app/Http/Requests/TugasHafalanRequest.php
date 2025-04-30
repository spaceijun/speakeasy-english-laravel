<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TugasHafalanRequest extends FormRequest
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
			'hafalan_id' => 'required',
			'kkm' => 'required|string',
			'body_questions' => 'required|string',
        ];
    }
}
