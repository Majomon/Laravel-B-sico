<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/* Route::get('/', function () {
    return "Hola perrito, estas en el Home";
}); */

Route::get('/', HomeController::class);

/* Grupo de rutas */
Route::controller(CursoController::class)->group(function () {
    Route::get('/cursos', "index");

    Route::get('/cursos/create', "create");

    Route::get('/cursos/{curso}', "show");
});









/* Con el signo de interrogación decimos que esa prop puede ser opcional */
/* Route::get('/cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso : $curso, de la categoria: $categoria";
    } else {
        return "Bienvenido al curso : $curso";
    }
}); */
