<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/primavera', 'products.primavera');
Route::view('/sprint', 'products.sprint');
Route::view('/gts', 'products.gts');
