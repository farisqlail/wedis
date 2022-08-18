<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\PembayaranController;
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
        Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
        Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::get('/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::post('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.delete');

        Route::get('/categories', [CategoryController::class, 'index'])->name('category.admin');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

        Route::resource('/customer', CustomerController::class);
        Route::get('/customer/delete/{id}', [CustomerController::class, 'destroy']);

        Route::resource('/developer', DeveloperController::class);
        Route::get('/developer/delete/{id}', [DeveloperController::class, 'destroy']);

        Route::resource('/pembayaran', PembayaranController::class);
        Route::get('/pembayaran/delete/{id}', [PembayaranController::class, 'destroy']);
        Route::get('/pembayaran/detail/{id}', [PembayaranController::class, 'detail'])->name('pembayaran.detail');
        Route::get('/hitung-total/{id}', [PembayaranController::class, 'hitungTotal']);
        Route::get('/hitung-keuntungan/{id}', [PembayaranController::class, 'hitungKeuntungan']);
        Route::get('/hitung-total-update/{id}', [PembayaranController::class, 'hitungTotalUpdate']);
        Route::get('/history', [PembayaranController::class, 'history']);

        Route::resource('/kebutuhan', KebutuhanController::class);
        Route::get('/kebutuhan/delete/{id}', [KebutuhanController::class, 'destroy']);
    }
);
