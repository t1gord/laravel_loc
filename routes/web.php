<?php

use Illuminate\Support\Facades\Route;


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
})->name('portfolio');

Route::get('/test-art', function () {
    return view('test-art');
})->name('test-art');

Route::get('/test-page', 'App\Http\Controllers\PortfolioCategoryController@index');

Route::get('/test', function () {
    return Route::currentRouteName();
})->name('test');
