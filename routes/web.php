<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-portfolio', function () {
    return view('test');
})->name('portfolio');

Route::get('/test-art', function () {
    return view('test-art');
})->name('test-art');

Route::get('/test', function () {
    return Route::currentRouteName();
})->name('test');
