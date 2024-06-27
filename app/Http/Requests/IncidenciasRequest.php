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
            'apps_id' => ['required'],
            'fecha_envio' => 'required',
            'resumen' => 'required',
            'nota' => 'required' ,
            'fecha_atencion' => 'required',
            'observacion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'apps_id' => ['Seleccionar la aplicacion es necesario'],
            'fecha_envio' => ['La fecha de envio es obligatorio'],
            'resumen' => ['El resumen es obligatorio'],
            'nota' => ['El nota es obligatorio'],
            'fecha_atencion' => ['La fecha de atencion es obligatorio'],
            'observacion' => ['La observacion es obligatorio'],
        ];
    }
}
