<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/create/atividade', [App\Http\Controllers\AtividadesController::class, 'create'])->name('create');
Route::get('/list/atividade', [App\Http\Controllers\AtividadesController::class, 'list'])->name('list');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
