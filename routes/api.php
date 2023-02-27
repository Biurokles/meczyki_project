<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\AuthorsController;

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
Route::get('/top3/',[AuthorsController::class, 'top3'])->name('api.top3');
Route::get('/authors/{id}',[AuthorsController::class, 'showAuthors'])->name('api.showAuthors');
Route::get('/news/{id}',[NewsController::class, 'show'])->name('api.show');
