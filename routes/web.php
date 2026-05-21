<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\NovedadeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\TokenRecoveryController;
use App\Http\Controllers\IngresoEquipoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/consulta_usuarios', [ConsultaController::class, 'index']);

Route::get('/consulta_novedades', [ConsultaController::class, 'index1']);

Route::get('/consulta_roles', [ConsultaController::class, 'index2']);

Route::get('/consulta_ingresos', [ConsultaController::class, 'index3']);

Route::get('/consulta_token', [ConsultaController::class, 'index4']);

Route::get('/consulta_equipos', [ConsultaController::class, 'index5']);


