<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradoresController;

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
    return view('administradores.index'); //cuando esta dentro de una carpeta, poner nombre de la capeta . nombre del documento
});

Route::get('/calendario', function () {
    return view('administradores.calendario'); //cuando esta dentro de una carpeta, poner nombre de la capeta . nombre del documento
});

Route::get('/iniciarSesion', function () {
    return view('administradores.inicarSesion'); //cuando esta dentro de una carpeta, poner nombre de la capeta . nombre del documento
});

Route::get('/registroPelicula', function () {
    return view('administradores.registroPelicula'); //cuando esta dentro de una carpeta, poner nombre de la capeta . nombre del documento
});
   
