<?php

use App\Http\Controllers\LeverancierController; 
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPerLeverancierController;
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
Route::resource('leverancier', LeverancierController::class);
Route::get('/product/{product}/levering/{leverancier}/create', [ProductPerLeverancierController::class, 'create'])->name('leverancier.create');
Route::post('/product/{product}/levering/{leverancier}', [ProductPerLeverancierController::class, 'store'])->name('leverancier.store');


require __DIR__.'/auth.php';
