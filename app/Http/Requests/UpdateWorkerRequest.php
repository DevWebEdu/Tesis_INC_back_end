<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkerRequest extends FormRequest
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
            'password' => 'string|min:8',
            'name' => 'string|min:15',
            'username' => 'string|max:15',
            'admin' => 'string|in:0,1'
        ];
    }

    public function messages(){
        return [
            'password.string'=> 'La contraseña debe ser string',
            'password.min'=> 'La nueva contraseña debe tener minimo 8 caracteres',
            'name.string'=> 'El nombre debe ser string',
            'name.min'=> 'El nuevo nombre  debe tener minimo 15 caracteres',
            'username.string'=> 'El username debe ser string',
            'username.max'=> 'El nuevo username debe tener max 15 caracteres',
            'admin.string' => 'El valor de admin debe ser string',
            'admin.in' =>' El valor solo es entre 0 y 1'
        ];
    }
}
