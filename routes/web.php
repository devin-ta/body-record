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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/new-data', [\App\Http\Controllers\HomeController::class, 'newData'])->name('newData');
    Route::post('/add-data', [\App\Http\Controllers\HomeController::class, 'addData'])->name('addData');
});
