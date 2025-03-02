<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordRequest extends FormRequest
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
            'current_password' => 'required',
            'new_password'=> 'required|string|min:8|confirmed',
        ];
    }

    public function messages(){
        return [
            'current_password.required'=> 'La contraseña actual es obligatoria',
            'new_password.required'=> 'La nueva contraseña es obligatoria',
            'new_password.min' => 'La nueva contraseña debe tener al menos 8 caracteres',
            'new_password.confirmed' => 'La confirmacion de la nueva contraseña no coincide'
        ];
    }

    public function validateCurrentPassword() {
        $user  = Auth::user();
        //Valida si la contraseña que ingresa como contraseña actual sea igual a la, del usuario que esta autenticado
        if (!Hash::check($this->current_password, $user->password)) {
            throw  ValidationException::withMessages([
                'current_password' => ['La contraseña actual no es correcta.'],
            ]);
        }
    }
}




