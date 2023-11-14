<?php

use App\Http\Controllers\AgremiadoController;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\RolController;
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

Route::group(['middleware' => 'jwt.auth'], function () {
    // Tus rutas protegidas por JWT aquí
});


Route::post('newRegister', [Authentication::class, 'register']);
Route::post('newLogin', [Authentication::class, 'login']);
Route::post('logout', [Authentication::class, 'logout']);


Route::post('role', [RolController::class, 'registerRol']);
Route::get('getRoles', [RolController::class, 'getRols']);
Route::get('getRol/{id}', [RolController::class, 'getRol']);
Route::put('updateRol/{id}', [RolController::class, 'updateRol']);
Route::delete('deleteRol/{id}', [RolController::class, 'deleteRol']);


Route::post('genero', [GeneroController::class, 'registerGenero']);
Route::get('getGeneros', [GeneroController::class, 'getGeneros']);
Route::get('getGenero/{id}', [GeneroController::class, 'getGenero']);
Route::put('updateGenero/{id}', [GeneroController::class, 'updateGenero']);
Route::delete('deleteGenero/{id}', [GeneroController::class, 'deleteGenero']);


Route::post('NewAgremiado',[AgremiadoController::class, 'registerAgremiado']);
Route::get('getAgremiados',[AgremiadoController::class, 'getAgremiados']);
Route::get('getAgremiado/{id}',[AgremiadoController::class, 'getAgremiado']);
Route::put('updateAgremiado/{id}',[AgremiadoController::class, 'updateAgremiado']);
Route::delete('deleteAgremiado/{id}',[AgremiadoController::class, 'deleteAgremiado']);

