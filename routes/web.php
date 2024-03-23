<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/* Route::get('/', function () {
    return "Hola perrito, estas en el Home";
}); */

Route::get('/', HomeController::class);

Route::get('/cursos', function () {
    return "Bienvenido a la pagina de cursos";
});

Route::get('/cursos/create', function () {
    return "En esta página podras crear un curso";
});

Route::get('/cursos/{curso}', function ($curso) {
        return "Bienvenido al curso : $curso";
    });

/* Con el signo de interrogación decimos que esa prop puede ser opcional */
/* Route::get('/cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso : $curso, de la categoria: $categoria";
    } else {
        return "Bienvenido al curso : $curso";
    }
}); */
