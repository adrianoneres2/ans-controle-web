<?php

use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'create'])->name('create-user');
Route::post('/user', [UserController::class, 'store'])->name('store-user');
