<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{   
    public function logout(Request $request ){
        $user = $request -> user();
        $user->currentAccessToken()->delete();

        return [
            'user' => null
        ];
    }
    
    public function login(LoginRequest $request) {
        $data  = $request->validated();
        
        if (!Auth::attempt($data)) {
            return response([
                'errors' => ['El usuario o contraseña son incorrectos']
            ], 422);
        }

        $user = Auth::user();

        return [
            'token' =>  $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }
}
