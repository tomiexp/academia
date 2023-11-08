<?php

use App\Http\Controllers\registrousuarioController;
use App\Http\Controllers\iniciarsesionController;
use App\Http\Controllers\cuentaController;
use App\Http\Controllers\inscripcionesController;
use App\Http\Controllers\principalController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\pagosController;
use App\Http\Controllers\acursosController;
use App\Http\Controllers\signupController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



//homepage

Route::get('/principal',[principalController::class, 'principal']);



//registrarse

Route::get('/prueba', function () {
    return view('prueba');
});

Route::post('/register' , [signupController::class, 'register']) -> name('register');

Route::get('/registrarse_1', [registrousuarioController::class, 'registrarse_1']);

Route::get('/registrarse_2', [registrousuarioController::class, 'registrarse_2']);

Route::get('/registrarse_3', [registrousuarioController::class, 'registrarse_3']);

Route::get('/registrarse_4', [registrousuarioController::class, 'registrarse_4']);

Route::get('/registrarse_5', [registrousuarioController::class, 'registrarse_5']);

Route::get('/errorsignup', [registrousuarioController::class, 'error']);



//iniciarsesion

Route::get('/iniciarsesion', [iniciarsesionController::class, 'iniciarsesion'])-> name('iniciarsesion');

Route::post('/login' , [signupController::class, 'login']) -> name('login');

Route::get('/errorlogin', [iniciarsesionController::class, 'error']);

Route::get('/cambiarcontraseña', [iniciarsesionController::class, 'cambiarcontraseña']);

Route::get('/loggedout', [iniciarsesionController::class, 'loggedout'])->name('loggedout');



//administrar cuenta

Route::get('/micuenta', [cuentaController::class, 'micuenta'])->middleware('auth')->name('micuenta');

Route::get('/editarinfo', [cuentaController::class, 'editarinfo'])->middleware('auth');

Route::post('/logout' , [signupController::class, 'logout']) -> name('logout');



//inscrippciones

Route::get('/inscripciones', [inscripcionesController::class, 'inscripciones'])->middleware('auth');



//alquiler

Route::get('/vestuario', [productosController::class, 'vestuario'])->middleware('auth');

Route::get('/audiovisual', [productosController::class, 'audiovisual'])->middleware('auth');

Route::get('/periodo', [productosController::class,'periodo'])->middleware('auth');



//pagos

Route::get('/pagos_1',[pagoscontroller::class,'pagos_1'])->middleware('auth');

Route::get('/pagos_2',[pagoscontroller::class,'pagos_2'])->middleware('auth');

Route::get('/pagos_3',[pagoscontroller::class,'pagos_3'])->middleware('auth');



//asignación de cursos

Route::get('/asignacioncursos', [acursosController::class, 'asignacioncursos'])->middleware('auth');

Route::get('/profesores', [acursosController::class, 'profesores'])->middleware('auth');

Route::get('/horarios', [acursosController::class, 'horarios'])->middleware('auth');

Route::get('/jornadas', [acursosController::class, 'jornadas'])->middleware('auth');

Route::get('/especialidad', [acursosController::class, 'especialidad'])->middleware('auth');