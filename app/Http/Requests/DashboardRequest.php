<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DashboardRequest extends FormRequest
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
            'id' => ['required','unique:incs','regex:/^INC\d{12}$/'],
            'apps_id' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'id' => ['El id es obligatorio'],
            'apps_id' => ['Seleccionar la aplicacion es necesario'],
            'id.unique' => ['Ya fue atendido '],
            'id.regex'=> ['El codigo de las incidencias debe tener como prefijo INC y luego 8 digitos numericos (Ejemplo: INC12345678).'],
        ];
    }
}
