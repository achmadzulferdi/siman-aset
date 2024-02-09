<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class,'index']);
Route::get('/asets',[\App\Http\Controllers\AsetController::class,'index']);
Route::post('/asets',[\App\Http\Controllers\AsetController::class,'store']);
Route::get('/asets/baru',[\App\Http\Controllers\AsetController::class,'create']);
Route::get('/asets/{id}/edit',[\App\Http\Controllers\AsetController::class,'edit']);
Route::put('/asets/{id}',[\App\Http\Controllers\AsetController::class,'update']);
Route::delete('/asets/{id}',[\App\Http\Controllers\AsetController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
