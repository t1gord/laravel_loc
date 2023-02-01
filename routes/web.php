<?php

use \App\Http\Controllers\ArtController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArtController::class, 'home'])->name('home');

Route::get('single', function () {
    return view('pages.single');
});
