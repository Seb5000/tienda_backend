<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAccionController;
use App\Http\Controllers\AccionController;
use App\Http\Controllers\GrupoAccionController;
use App\Http\Controllers\ProductoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('TipoAccion')->middleware('guest')->group(function () {
    Route::get('index', [TipoAccionController::class, 'index']);
    Route::post('store', [TipoAccionController::class, 'store']);
    Route::get('show/{tipoAccion}', [TipoAccionController::class, 'show']);
    Route::get('list', [TipoAccionController::class, 'list']);
    Route::put('update/{tipoAccion}', [TipoAccionController::class, 'update']);
    Route::delete('destroy/{tipoAccion}', [TipoAccionController::class, 'destroy']);
});

Route::prefix('Accion')->middleware('guest')->group(function () {
    Route::get('index', [AccionController::class, 'index']);
    Route::post('store', [AccionController::class, 'store']);
    Route::get('show/{accion}', [AccionController::class, 'show']);
    Route::put('update/{accion}', [AccionController::class, 'update']);
    Route::delete('destroy/{accion}', [AccionController::class, 'destroy']);
    Route::post('guardarGrupo', [AccionController::class, 'guardarGrupo']);
    Route::get('listaAcciones', [AccionController::class, 'listaAcciones']);

    
});

Route::prefix('GrupoAccion')->middleware('guest')->group(function () {
    Route::get('index', [GrupoAccionController::class, 'index']);
    Route::post('store', [GrupoAccionController::class, 'store']);
    Route::get('show/{grupoAccion}', [GrupoAccionController::class, 'show']);
    Route::put('update/{grupoAccion}', [GrupoAccionController::class, 'update']);
    Route::delete('destroy/{grupoAccion}', [GrupoAccionController::class, 'destroy']);
});

Route::prefix('Producto')->middleware('guest')->group(function () {
    Route::get('index', [ProductoController::class, 'index']);
    Route::post('buscar', [ProductoController::class, 'buscar']);
    Route::post('store', [ProductoController::class, 'store']);
    Route::get('show/{producto}', [ProductoController::class, 'show']);
    Route::put('update/{producto}', [ProductoController::class, 'update']);
    Route::delete('destroy/{producto}', [ProductoController::class, 'destroy']);
});
