<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return redirect('/cursos');
});

Route::resource('cursos', CursoController::class);