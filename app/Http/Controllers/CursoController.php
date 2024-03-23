<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* El método invoker es para cuando administrar una única ruta */

class CursoController extends Controller
{
    public function index()
    {
        return view("cursos.index");
    }
    public function create()
    {
        return view("cursos.create");
    }
    public function show($curso)
    {
        return view("cursos.show", ["curso" => $curso]);
    }
}
