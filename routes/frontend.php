<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('checkout', function () {
    return view('frontend.checkout');
});

Route::get('shop', [IndexController::class, 'shop'])->name('shop');
Route::post('shop', [IndexController::class, 'postShop'])->name('postShop');

