<?php

use App\Http\Controllers\szavakController;
use App\Http\Controllers\temaController;
use App\Models\szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/szavak",[szavakController::class,"szavak"]);
Route::get("/szavek/tema/{id}",[szavakController::class,"szavakTema"]);
Route::get("/tema",[temaController::class,"tema"]);