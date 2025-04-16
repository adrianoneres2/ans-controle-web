<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::get("/user/email/{email}", [UserController::class, 'findByEmail']);
Route::apiResource("/user/all", UserController::class);
Route::get('/user/add', [UserController::class, 'store']);
Route::delete("/user/{id}", [UserController::class]);
Route::get('/user/id/{id}', [UserController::class, 'findById']);
