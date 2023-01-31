<?php

use \App\Http\Controllers\ArtController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/', [ArtController::class, 'home']);

Route::get('single', function () {
    return view('pages.single');
});
