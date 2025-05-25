<?php

use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [UserController::class, 'index'])->name('home')->middleware('auth');

/*Routes for users*/
Route::get('/user/create', [UserController::class, 'create'])->name('user.view.create')->middleware('auth');
Route::post('/user', [UserController::class, 'store'])->name('user.store')->middleware('auth');
Route::get('/user/view-update-password', [UserController::class, 'updatePassword'])->name('user.view.update.password')->middleware('auth');
Route::post('/user/update-password', [UserController::class, 'storePassword'])->name('user.store.password')->middleware('auth');
Route::get('/user/view-details', [UserController::class, 'details'])->name('user.view.details')->middleware('auth');
Route::post('/user/details', [UserController::class, 'userDetails'])->name('user.details')->middleware('auth');

/** Routes for authentications */
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
