<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class AdministradoresController extends Controller
{
    //
    public function index(){
        $administradores = Administrador::all();

        return view('adminstradores.index');
    }
}
