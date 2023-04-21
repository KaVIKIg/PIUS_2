<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerCategory;
use App\Http\Controllers\ControllerProduct;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products/{slug}', ControllerProduct::class);
Route::get('/category/{slug}', ControllerCategory::class);
