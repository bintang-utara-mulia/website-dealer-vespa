<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/sprint', function () {
    return view('products.sprint');
});

Route::get('/products/primavera', function () {
    return view('products.primavera');
});

Route::get('/products/gts', function () {
    return view('products.gts');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});
