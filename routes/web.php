<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioCategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test-portfolio', function () {
    return view('test');
})->name('portfolio');

Route::get('test-page', [PortfolioCategoryController::class, 'index']);

Route::get('test-art', function () {
    return view('test-art');
})->name('test-art');

Route::get('test', function () {
    return Route::currentRouteName();
})->name('test');
