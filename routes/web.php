<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::prefix('/admin')->group( function () {

    Route::group(
        [
            'middleware' => 'auth',
        ],
        function () {
    
            Route::get('/', [BlogController::class, 'index'])->name('blog.admin');
            Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
            Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
            Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
        }
    );
    
    Route::group(
        [
            'middleware' => 'auth',
        ],
        function () {
    
            Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.admin');
            Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
            Route::post('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
            Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'delete'])->name('portfolio.delete');
        }
    );

    Route::group(
        [
            'middleware' => 'auth',
        ],
        function () {
    
            Route::get('/', [CategoryController::class, 'index'])->name('category.admin');
            Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
            Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
            Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
        }
    );

});
