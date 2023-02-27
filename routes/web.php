<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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


Route::get('/edit/{id}',[NewsController::class, 'edit'])->name('edit');
Route::get('/',[NewsController::class, 'index'])->name('index');
Route::post('/',[NewsController::class, 'store'])->name('store');
Route::post('/edit/{id}',[NewsController::class, 'update'])->name('update');
Route::delete('/',[NewsController::class, 'delete'])->name('delete');
