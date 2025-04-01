<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view("/teste", "teste");

Route::get('/user/add', function(){
    echo "User registered successfully!!";
});