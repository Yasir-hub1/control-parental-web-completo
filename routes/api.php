<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CarpetaController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ContenidoController;
use App\Http\Controllers\Api\HijoController;
use App\Http\Controllers\Api\LocalizacionController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\TutorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/registerAdmin', [AuthController::class, 'registerAdmin']);
Route::post('/registerTutor', [AuthController::class, 'registerTutor']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/users', [AuthController::class, 'index']);
Route::get('/user-hijos', [HijoController::class, 'index']);

Route::group(['middleware' => ["auth:sanctum"]], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/localizacion', [LocalizacionController::class, 'index']); //Para ver todas las localizaciones, sólo usuarios loggueados que sean administrador
    //Crud Categoria
    Route::get('/categoria', [CategoriaController::class, 'index']);
    Route::post('/categoria', [CategoriaController::class, 'store']);
    Route::put('/categoria/{id}', [CategoriaController::class, 'update']);
    Route::get('/categoria/{id}', [CategoriaController::class, 'show']);
    Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy']);
    //Crud Contenido
    Route::get('/contenido', [ContenidoController::class, 'index']);
    Route::post('/contenido', [ContenidoController::class, 'store']);
    Route::put('/contenido/{id}', [ContenidoController::class, 'update']);
    Route::get('/contenido/{id}', [ContenidoController::class, 'show']);
    Route::delete('/contenido/{id}', [ContenidoController::class, 'destroy']);
    Route::get('/contenido-hijo/{id}', [ContenidoController::class, 'contenidoHijo']); //id del hijo, para ver el contenido que tiene un hijo en especifico
    Route::get('/contenido-hijos', [ContenidoController::class, 'contenidoHijos']);//Muestra el contenido de cada hijo
//Crud Contenido
Route::post('/archivo', [ArchivoController::class, 'store']);
Route::put('/archivo/{id}', [ArchivoController::class, 'update']);
Route::get('/archivo/{id}', [ArchivoController::class, 'show']);
Route::delete('/archivo/{id}', [ArchivoController::class, 'destroy']);
Route::get('/archivo-hijo/{id}', [ArchivoController::class, 'archivoHijo']); //id del hijo, para ver el archivo que tiene un hijo en especifico
Route::get('/archivo-hijos', [ArchivoController::class, 'archivoHijos']);//Muestra el archivo de cada hijo
    //Crud Carpeta
    Route::post('/carpeta', [CarpetaController::class, 'store']);
    Route::put('/carpeta/{id}', [CarpetaController::class, 'update']);
    Route::get('/carpeta/{id}', [CarpetaController::class, 'show']);
    Route::delete('/carpeta/{id}', [CarpetaController::class, 'destroy']);
    Route::get('/carpeta-hijo/{id}', [CarpetaController::class, 'carpetaHijo']); //id del hijo, para ver el Carpeta que tiene un hijo en especifico
    Route::get('/carpeta-hijos', [CarpetaController::class, 'carpetaHijos']);//Muestra el carpeta de cada hijo
    //DATOS DEL USUARIO LOGGUEADO
    Route::post('/user', [AuthController::class, 'profile']);

    //METODOS PARA USUARIO LOGGUEADO TUTOR
    Route::post('/profileTutor', [AuthController::class, 'tutor']); //Para ver los datos del tutor loggueado
    Route::post('/hijos-tutor', [TutorController::class, 'hijosTutor']); //Para ver los hijos que tiene un tutor loggueado
    Route::post('/registerHijo', [AuthController::class, 'registerHijo']); //Para que un tutor loggueado pueda registrar a un nuevo usuario hijo
    Route::put('tutor', [TutorController::class, 'update']); //Para actualizar los datos del tutor loggueado
    Route::delete('tutor', [TutorController::class, 'destroy']); //Para eliminar el usuario tutor loggueado
    Route::put('hijo-tutor/{id}', [HijoController::class, 'update']); //para actualizar los datos de un hijo del tutor
    Route::get('hijo-tutor/{id}', [HijoController::class, 'showHijo']); //para ver los datos de un hijo del tutor
    Route::get('hijo-tutor/{id}', [HijoController::class, 'destroyHijo']); //Para eliminar un hijo de un usuario tutor loggueado
    Route::get('hijo-localizaciones/{id}', [HijoController::class, 'localizacionesHijo']); //para ver todas las localizaciones de un hijo
    Route::delete('hijo-localizacion/{id}', [LocalizacionController::class, 'destroy']); //id de la localización, elimina una localización de uno de sus hijos si lo encuentra
    //METODOS PARA USUARIO LOGGUEADO HIJO
    Route::post('/profileHijo', [AuthController::class, 'hijo']); //Para ver los datos del hijo loggueado
    Route::post('/tutor-hijo', [AuthController::class, 'tutorHijo']); //Para ver el tutor del hijo
    Route::post('/localizacion', [LocalizacionController::class, 'store']); //Para agregar localización al hijo
    /****PLAN *****/
    Route::apiResource('plan', PlanController::class);
});
