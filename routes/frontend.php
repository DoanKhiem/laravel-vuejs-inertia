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

Route::get('index', function () {
    return view('frontend.index');
});

Route::get('checkout', function () {
    return view('frontend.checkout');
});

Route::get('shop', function () {
    return view('frontend.category-shelf-book');
});
