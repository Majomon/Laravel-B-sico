<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* El método invoker es para cuando administrar una única ruta */

class CursoController extends Controller
{
    public function index()
    {
        return "Bienvenido a la pagina de cursos";
    }
    public function create()
    {
        return "En esta página podras crear un curso";
    }
    public function show($curso)
    {
        return "Bienvenido al curso : $curso";
    }
}
