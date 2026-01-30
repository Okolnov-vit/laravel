<?php

use App\Http\Controllers\{
    HomeController,
    CatalogController,
    ProductController,
    OrderController,
    BasketController
};
use Encore\Admin\Facades\Admin;

Admin::routes();


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/basket', [OrderController::class, 'create'])->name('basket');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::post('/basket/add', [BasketController::class, 'add'])->name('basket.add');


Route::post('/basket/clear', [BasketController::class, 'clear'])->name('basket.clear');