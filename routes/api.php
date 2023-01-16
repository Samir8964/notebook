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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('people', [\App\Http\Controllers\API\PersonController::class,'index']);
Route::get('people/{person}', [\App\Http\Controllers\API\PersonController::class,'show']);
Route::post('people', [\App\Http\Controllers\API\PersonController::class,'store']);
Route::patch('people/{person}', [\App\Http\Controllers\API\PersonController::class,'update']);
Route::delete('people/{person}', [\App\Http\Controllers\API\PersonController::class,'delete']);
