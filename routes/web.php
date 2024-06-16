<?php

use App\Http\Controllers\DashboardController;
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
Route::get('/', [ProductController::class, 'index'])->name('main.index');

Route::controller(ProductController::class)->prefix('dashboard/product')->as('product.')->group(function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/{product}/edit', 'edit')->name('edit');
    Route::patch('/{product}/', 'update')->name('update');
    Route::get('/{product}', 'show')->name('show');
    Route::delete('/{product}', 'delete')->name('delete');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

