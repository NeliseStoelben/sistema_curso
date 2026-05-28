<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;

Route::get('/', function () {
    return redirect('/cursos');
});

Route::resource('cursos', CursoController::class);
Route::resource('matriculas', MatriculaController::class);