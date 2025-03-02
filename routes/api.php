<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\IncidenciasController;
use App\Http\Controllers\WorkerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user',function(Request $request){
        return $request->user();
    });
    Route::post('/logout',[AuthController::class,'logout']);
    Route::apiResource('/dashboard', DashboardController::class);
    Route::apiResource('/incidencias', IncidenciasController::class);
    Route::apiResource('/finding', FindController::class);

    //Vistas de perfil y modificacion de perfil del usuario
    //perfil
    Route::get('/profile',[WorkerController::class,'profile']);
    //actualizar perfil
    Route::put('/profile',[WorkerController::class,'updateProfile']);
    //actualizar contraseña
    Route::put('/updatepassword',[WorkerController::class,'updatePassword']);


    //Vista del admin
    //Ver todos los trabajadores
    Route::get('/workers',[AdminController::class , 'getAllWorkers'])->middleware('admin');
    //Ver detalle de un solo trabajador
    Route::get('/workers/{id}',[AdminController::class , 'getWorkerById'])->middleware('admin');
    //Pertenecera a la vista del detalle del trabajador -> mostrara todas las incidencias atendidas
    Route::get('/getincsfromworker/{id}',[AdminController::class,'getAllIncsFromUserById'])->middleware('admin');
    //Actualizar un trabajador existente
    Route::put('/workers/{id}', [AdminController::class, 'updateWorkerById'])->middleware('admin');
    //Crear un trabajador
    Route::post('/createworker',[AdminController::class,'createWorker'])->middleware('admin');
    //Borrar un trabajador
    Route::delete('/deleteworker/{id}',[AdminController::class, 'deleteById'])->middleware('admin');



});

Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('/timing', TimeController::class);