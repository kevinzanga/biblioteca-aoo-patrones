<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\AutorController;

//Ruta para libros
Route::get('/libros', [LibroController::class, 'index']);
Route::get('/libros/{id}', [LibroController::class, 'show']);
Route::post('/libros', [LibroController::class, 'store']);
Route::put('/libros/{libro}', [LibroController::class, 'update']);

//Ruta para prestamos
Route::post('/prestamos', [PrestamoController::class, 'store']);
Route::get('/prestamos/{id}', [PrestamoController::class, 'show']);
Route::delete('/prestamos/{id}', [PrestamoController::class, 'destroy']);


//Ruta Autor
Route::get('autores', [AutorController::class, 'index']); // Listar autores
Route::post('autores', [AutorController::class, 'store']); // Registrar autor
Route::put('autores/{id}', [AutorController::class, 'update']); // Actualizar autor
Route::delete('autores/{id}', [AutorController::class, 'destroy']); // Eliminar autor