<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AlumnoController;
use Illuminate\Http\Request;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/users/login', [AlumnoController::class, 'login']);
Route::post('/users/login', [UserController::class, 'login']);

Route::get('/users/register', [AlumnoController::class, 'register']);
Route::post('/users/register', [UserController::class, 'register']);




    Route::get('/users/logout', [UserController::class, 'logout']);

    Route::get('/alumnos', [AlumnoController::class, 'index']);
    Route::get('/alumnos/crear', [AlumnoController::class, 'create']);
    Route::post('/alumnos/crear', [AlumnoController::class, 'store']);
    Route::get('/alumnos/ver/{id}', [AlumnoController::class, 'show']);
    Route::get('/alumnos/editar/{id}', [AlumnoController::class, 'edit']);
    Route::put('/alumnos/editar/{id}',  [AlumnoController::class, 'update']);
    Route::get('/alumnos/eliminar/{id}', [AlumnoController::class, 'destroy']);

