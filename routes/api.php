<?php
use App\Http\Controllers\TimeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\IncidenciasController;
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
});


Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('/timing', TimeController::class);