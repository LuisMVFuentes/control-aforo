<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('Explorar', function () {
    return view('buscar-local');
})->name('xplorer');


Route::get('Conectar', function () {
    return view('conexion');
})->name('conexion');

Route::get('conexion_db', function () {
    return view('conexion_db');
})->name('conexion_db');
