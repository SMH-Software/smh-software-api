<?php

use App\Http\Controllers\Api\AccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

Route::get('/', [AccountController::class, 'index']);
Route::post('/', [AccountController::class, 'store']);
Route::get('/{id}', [AccountController::class, 'show']);
Route::patch('/{id}', [AccountController::class, 'update']);
Route::delete('/{id}', [AccountController::class, 'delete']);

