<?php

use App\Http\Controllers\LocalController;
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

Route::get('Locals', 'LocalController', 'empty')->name('locals');


