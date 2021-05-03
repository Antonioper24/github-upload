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
    return view('index');
});

Route::get('cliente', function () {
    return view('clientes');
});

Route::get('doctores', function () {
    return view('doctores');
});

Route::get('contacto', function () {
    return view('contactos');
});

Route::get('cita', function () {
    return view('citas');
});

Route::get('Endodoncia', function () {
    return view('endodoncias');
});

Route::get('Ortodoncia', function () {
    return view('ortodoncias');
});

Route::get('protesis', function () {
    return view('protesis');
});

Route::get('Implante', function () {
    return view('implantes');
});

Route::get('Caries', function () {
    return view('caries');
});

Route::get('Estetica', function () {
    return view('esteticas');
});


