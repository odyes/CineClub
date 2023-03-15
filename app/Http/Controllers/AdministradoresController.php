<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    //
    public function index(){
        $administradores = Administrador::all();

        return view('adminstradores.index');
    }
}
