<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MagazijnController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::resource('product', ProductController::class);
Route::get('/product/{product}/levering', [ProductController::class, 'levering'])->name('product.levering');

require __DIR__.'/auth.php';
