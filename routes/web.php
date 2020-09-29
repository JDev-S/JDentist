<?php

use Illuminate\Support\Facades\Route;

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
    return view('/principal/index');
});

/*MUESTRA LA CONSOLA DEL PROGRAMA*/
Route::get('/consola', function () {
    return view('/sistema/index');
});

/*TODO LO RELACIONANDO A PACIENTE*/

Route::get('/consola_paciente','PacienteController@listado_paciente');

Route::get('/consola_expediente','PacienteController@listado_expediente');

Route::post('/consola_eliminar_paciente','PacienteController@eliminar')->name('consola_eliminar_paciente');

Route::post('/consola_agregar_paciente','PacienteController@agregar')->name('consola_agregar_paciente');

Route::get('/consola_agregar_paciente', function () {
    return view('/sistema/Paciente/agregarPaciente');
});

Route::get('/consola_expediente_paciente', function () {
    return view('/sistema/Paciente/expediente');
});

Route::get('/consola_notas_paciente', function () {
    return view('/sistema/Paciente/notas');
});

/*TODO LO RELACIONADO A DOCTORES*/
Route::get('/consola_doctor', function () {
    return view('/sistema/Doctor/index');
});

Route::get('/consola_agregar_doctor', function () {
    return view('/sistema/Doctor/agregarDoctor');
});

/*TODO LO RELACIONADO A CLINICAS*/
Route::get('/consola_clinica', function () {
    return view('/sistema/Clinica/index');
});

Route::get('/consola_agregar_clinica', function () {
    return view('/sistema/Clinica/agregarClinica');
});

/*TODO LO RELACIONADO A SOCIO*/
Route::get('/consola_socio', function () {
    return view('/sistema/Socio/index');
});

Route::get('/consola_agregar_socio', function () {
    return view('/sistema/Socio/agregarSocio');
});

/*TODO LO RELACIONADO A RECEPCIONISTA*/
Route::get('/consola_recepcionista', function () {
    return view('/sistema/Recepcionista/index');
});

Route::get('/consola_agregar_recepcionista', function () {
    return view('/sistema/Recepcionista/agregarRecepcionista');
});