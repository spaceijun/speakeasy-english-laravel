<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JawabanHafalanRequest extends FormRequest
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
			'user_id' => 'required',
			'tugas_hafalan_id' => 'required',
			'body_answers' => 'required|string',
			// 'nilai' => 'string',
			// 'status' => 'required',
        ];
    }
}
