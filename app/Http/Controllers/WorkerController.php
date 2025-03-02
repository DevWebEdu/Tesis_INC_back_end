<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WorkerController extends Controller
{   
    //No es necesario ser admin
    public function profile(){
        $userId = auth()->user()->id;
        $user = User::find($userId);
        return [
            "user"=> $user
        ];
    }

    public function updateProfile(Request $request){
        $userId = auth()->user()->id;
        $user = User::find($userId);

        DB::table("users")->where("id", $userId)->update([
            'username' => $request->username ?? $user->username,
            'name' => $request->name ?? $user->name,
        ]);

        $user->refresh();
        return [
            'message' => 'Perfil actualizado',
            'user' => $user
        ];
    }


        
    public function updatePassword ( UpdatePasswordRequest $request){
        $request->validateCurrentPassword();

        $user = Auth::user();

        DB::table('users')->where('id', $user->id)->update([
            'password'=> Hash::make($request->password)
        ]);


        return[
            'message' => 'Contraseña actualizada correctamente'
        ];
    }

    // Metodo para traer tota la data de incidencias atendidas por el usuario 
    // Esta metodo dara la data a la vista del admin, como a el user que quiere ver su perfil
    // y para el admin dara la vista de las incidencias atendidas por el usuario al que desee ver el detalle.


}
