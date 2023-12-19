<?php

use App\Http\Controllers\PeliculasController;
use Illuminate\Support\Facades\Route;



// ruta por defecto
// Route::get('/', function () {
    
// });

// ruta personalizada

Route::get('/', [PeliculasController::class, 'index'])->name('peliculas.index');


Route::get('/create', [PeliculasController::class, 'create'])->name('peliculas.create');

Route::post('/store', [PeliculasController::class, 'store'])->name('peliculas.store');


Route::get('/edit/{id}', [PeliculasController::class, 'edit'])->name('peliculas.edit');

Route::put('/update/{id}', [PeliculasController::class, 'update'])->name('peliculas.update');


Route::get('/show/{id}', [PeliculasController::class, 'show'])->name('peliculas.show');

Route::delete('/destroy/{id}', [PeliculasController::class, 'destroy'])->name('peliculas.destroy');
