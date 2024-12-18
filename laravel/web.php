<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/Operation', [HomeController::class, 'Operation']);

Route::get('/Products', [HomeController::class, 'Products'])->name('products.index');

Route::get('/Reporting', [HomeController::class, 'Reporting']);

Route::get('/Help', [HomeController::class, 'Help']);

Route::get('/products/create',[HomeController::class, 'create'])->name('products.create');
Route::post('/products', [HomeController::class,'store'])->name('products.store');
Route::get('/products/{products}/edit', [HomeController::class, 'edit'])->name('products.edit');
Route::put('/products/{products}', [HomeController::class, 'update'])->name('products.update');
Route::delete('/products/{products}', [HomeController::class, 'destroy'])->name('products.destroy');