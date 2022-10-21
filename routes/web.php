<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioCategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-portfolio', function () {
    return view('test');
});

Route::get('/test-art', function () {
    return view('test-art');
});

Route::resource('portfolio', PortfolioCategoryController::class);

Route::get('/portfolio/category/{alias}', function () {
    return view('test-art');
});

Route::get('/test', function () {
    return Route::currentRouteName();
});
