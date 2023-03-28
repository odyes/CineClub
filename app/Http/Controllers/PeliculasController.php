<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Models\Pelicula;
use App\Models\Genero;


class PeliculasController extends Controller
{
    //
    public function index(){
        $peliculas = Pelicula::all();
        $genero = Genero::all();
        $argumentos['peliculas'] = $peliculas;
        $argumentos['generos'] = $generos;

        return view('index', $argumentos); 
    }

    public function pelicula($id){
        $pelicula = Pelicula::find($id);
        $genero = Genero::all();
        $pelicula->generos = "";
        foreach($generos as $genero)
        {
            $genero = Genero::find($genero);
            $pelicula->generos .= $genero->titulo . ". ";
        }
        $argumentos['pelicula'] = $pelicula;
        return view("pelicula", $argumentos);
    }

    public function create(){
        $generos = Genero::all();
        $argumentos['generos'] = $generos;
        return view("registroPelicula", $argumentos);
    }

    public function store(Request $request){
        $nuevaPelicula = new Pelicula();
        
        $nuevaPelicula->titulo = $request->input('titulo');
        $nuevaPelicula->descripcion = $request->input('descripcion');
        $nuevaPelicula->transmision = $request->input('transmision');
        $nuevaPelicula->ano = $request->input('ano');
        $nuevaPelicula->duracion = $request->input('duracion');
        $nuevaPelicula->director = $request->input('director');
    }

}

