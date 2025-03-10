<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncidenciasRequest extends FormRequest
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
            'resumen' => 'required',
            'nota' => 'required' ,
            'observacion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'resumen' => ['El resumen es obligatorio'],
            'nota' => ['El nota es obligatorio'],
            'observacion' => ['La observacion es obligatorio'],
        ];
    }
}
