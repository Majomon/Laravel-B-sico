<?php
/* Ubicación */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/* El método invoker es para cuando administrar una única ruta */

class HomeController extends Controller
{
    public function __invoke()
    {
        return "Hola perrito, estas en el Home";
    }
}
