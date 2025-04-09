<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('productos.index');
});

Route::prefix('productos')
 ->name('productos.')
 ->controller(ProductosController::class)->group(function () {
     Route::get('/index', 'index')->name('index'); // Lista todos los productos
     Route::get('/create', 'create')->name('create'); // Muestra el formulario para crear un producto
     Route::post('/store', 'store')->name('store'); // Crea un nuevo producto
     Route::get('/show/{id}', 'show')->name('show'); // Muestra un producto
     Route::get('/edit/{id}', 'edit')->name('edit'); // Muestra el formulario para editar un producto
     Route::post('/update/{id}', 'update')->name('update'); // Actualiza un producto
     Route::get('/destroy/{id}', 'destroy')->name('destroy'); // Elimina un producto
 });