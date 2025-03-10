<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use App\Models\User;
use Carbon\Carbon;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // Metodo para traer todos los trabajadores
    public function getAllWorkers()
    {
        $allUsers = DB::table('users')->get();
        return [
            'workers' => $allUsers
        ];
    }


    // Metodo para traer un trabajador
    public function getWorkerById(string $id)
    {
        $user = User::find($id);
        return response()->json([
            'user' => $user,
            'message'=> 'Se le quito el admin'
        ], 200);
    }
    // Metodo para modificar un trabajador
    public function updateWorkerById(UpdateWorkerRequest $request, string $id)
    {
        try {
            $request->validated();

            $userSelected = User::find($id);

            $userUpdated = DB::table('users')->where('id', $userSelected->id)->update([
                'username' => $request->username ?? $userSelected->username,
                'name' => $request->name ?? $userSelected->name,
                'password' => $request->password ?? $userSelected->password,
                'admin' => $request->admin ?? $userSelected->admin,
                'updated_at' => Carbon::now()
            ]);

            $userSelected->refresh();
            return response()->json([
                "message" => "Usuario correctamente actualizado",
                "user" => $userSelected
            ], 200);
        } catch (Error $e) {
            return response()->json([
                "message" => $e->getMessage()
            ], 400);
        }
    }
    // Metodo para crear un Trabajador
    public function createWorker(InsertWorkerRequest $request)
    {
        try {
            $request->validated();

            $userCreated = User::create(
                [
                    'name' => $request->name,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'admin' => $request->admin
                ]
            );

            return response()->json([
                'message' => "Usuario Correctamente Creado",
                "user" => $userCreated,
                "credentials" => [
                    "username" => $request->username,
                    "password" => $request->password
                ]
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage()
            ], 400);
        }
    }
    // Metodo para Borrar un trabajador
    public function deleteById(string $id)
    {
        try {
            $user = User::find($id);

            if (!$user) {
                return response()->json([
                    "message" => 'El usuario a eliminar no existe'
                ], 400);
            }

            $user->delete();

            return response()->json([
                "message" => "Se pudo eliminar correctamente al usuario seleccionado"
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage()
            ], 400);
        }
    }

    //Traemos todas las incidencias atendidas por un usuario

    public function getAllIncsFromUserById(string $id)
    {
        try {
            $incsUser = User::with('incidencias')->find($id);

            if (!$incsUser) {
                return response()->json([
                    'message' => 'Usuario no encontrado'
                ], 404);
            }

            return response()->json([
                'message' => 'Incidencias del usuario obtenidas correctamente',
                'incidencias' => $incsUser->incidencias
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Error al obtener las incidencias',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function turnAdminWorker(string $id)
    {
        try {
            $user = User::find($id);
            if (!$user) {
                return response()->json([
                    'message' => 'Usuario no encontrado'
                ], 404);
            }

            if($user->admin == '0') {
                 $user->update([
                    'admin' => '1'
                 ]);

                 return response()->json([
                    'user' => $user,
                    'message' => 'Se le dio  admin'
                ], 200);
            }else{
                $user->update([
                    'admin' => '0'
                 ]);

                 return response()->json([
                    'user' => $user,
                    'message'=> 'Se le quito el admin'
                ], 200);
            }

        } catch (Exception $e) {
            return response()->json([
                'message' => 'Error al obtener las incidencias',
                'error' => $e->getMessage()
            ], 500);
        }

    }

}