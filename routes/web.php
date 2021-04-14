<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Llibre;
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
    return view('welcome');
});
Route::get('/api/llibres', [ApiController::class, 'getLlibres']);
Route::put('/api/llibre/{id}', [ApiController::class, 'updateLlibre']);
Route::get('/api/autors', [ApiController::class, 'getAutors']);
Route::get('/api/autor/{id}', [ApiController::class, 'getAutorsId']);
Route::get('/api/llibre/{id}', [ApiController::class, 'getLlibresId']);
Route::post('/api/llibre', [ApiController::class, 'inserirLlibre']);
Route::post('/api/autor', [ApiController::class, 'inserirAutor']);
Route::delete('/api/llibre/{id}', [ApiController::class, 'eliminarLlibresId']);