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
    return view('welcome');
});

Route::group(['namespace'=>'Main', 'prefix'=>'main'], function (){
    Route::get('/', [\App\Http\Controllers\Main\PersonController::class,'index'])->name('main.index');
    Route::get('/create', [\App\Http\Controllers\Main\PersonController::class,'create'])->name('main.create');
    Route::post('/', [\App\Http\Controllers\Main\PersonController::class,'store'])->name('main.store');
    Route::get('/{person}', [\App\Http\Controllers\Main\PersonController::class,'show'])->name('main.show');
    Route::get('/{person}/edit', [\App\Http\Controllers\Main\PersonController::class,'edit'])->name('main.edit');
    Route::patch('/{person}', [\App\Http\Controllers\Main\PersonController::class,'update'])->name('main.update');
    Route::delete('/{person}', [\App\Http\Controllers\Main\PersonController::class,'delete'])->name('main.delete');
});
