<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(
    [
        // 'middleware' => 'auth',
    ],
    function () {
        Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/blogs', [BlogController::class, 'index'])->name('blog.admin');
        Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
        
        Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolio.admin');
        Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::post('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.delete');

        Route::get('/categories', [CategoryControlleroller::class, 'index'])->name('category.admin');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    }
);
