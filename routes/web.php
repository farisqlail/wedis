<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

// Route::middleware('auth:sanctum')->group( function () {

// });


Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::group(
    [
        'middleware' => 'auth',
    ],
    function () {
        Route::get('/blogs', [BlogController::class, 'index'])->name('blog.admin');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
        Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
    }
);

Route::group(
    [
        'middleware' => 'auth',
    ],
    function () {
    }
);

Route::group(
    [
        'middleware' => 'auth',
    ],
    function () {

        Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolio.admin');
        Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::post('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.delete');

        Route::get('/categories', [CategoryController::class, 'index'])->name('category.admin');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    }
);
