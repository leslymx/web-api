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

/**
 * Lo que necesito es que llegando al home se conecte al controlador
 * y genere los datos para la vista
 */
Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
