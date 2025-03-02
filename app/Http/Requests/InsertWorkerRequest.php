<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertWorkerRequest extends FormRequest
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
            'name' => 'required|string|min:15',
            'username' => 'required|unique:users|string|max:15',
            'admin' => 'required|string|in:1,0',
            'password' => 'required|string|min:8'
        ];
    }

    public function messages(){
        return [
            'password.required'=> 'La contraseña debe es obligatorio',
            'password.string'=> 'La contraseña debe ser string',
            'password.min'=> 'La nueva contraseña debe tener minimo 8 caracteres',
            'name.required'=> 'El nombre debe es obligatorio',
            'name.string'=> 'El nombre debe ser string',
            'name.min'=> 'El nuevo nombre  debe tener minimo 15 caracteres',
            'username.required'=> 'El username debe es obligatorio',
            'username.string'=> 'El username debe ser string',
            'username.max'=> 'El nuevo username debe tener max 15 caracteres',
            'admin.required'=> 'El valor de admin es obligatorio',
            'admin.string' => 'El valor de admin debe ser string',
            'admin.in' =>' El valor solo es entre 0 y 1'  
        ];
    }
}
