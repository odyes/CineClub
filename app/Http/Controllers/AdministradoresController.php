<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Models\Pelicula;

class AdministradoresController extends Controller
{
    //
    public function index(){
        $administradores = Administrador::all();

        return view('adminstradores.index');
    }

    public function peliculaRegistro(){
        $administradores = Pelicula::all();
        return view('/registroPelicula'); 
    }

    public function update(){
        
    }

    public function editarRegistro(){

    }

    public function delete(){

    }
    public function destroy(){

    }

}
