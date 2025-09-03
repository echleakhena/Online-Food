<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    AuthController,
    CategoryController,
    CustomerController,
    FoodController,
    OrderController,
    PaymentController,
    ReportController,
    UserController
};
use App\Http\Middleware\AdminAuth;

// Public 

Route::get('/', fn() => view('Frontend.index'));
Route::get('/Menu', fn() => view('Frontend.Menu'));
Route::get('/about', fn() => view('Frontend.about'));
Route::get('/Login', fn() => view('Frontend.Login'));
Route::get('/contact', fn() => view('Frontend.contact'));

Route::get('/Auth',[AuthController::class, 'auth'])->name('auth');
Route::post('/AdminLogin', [AuthController::class, 'adminlogin'])->name('auth.login');

Route::get('/FormRegister',[CustomerController::class, 'rigister'])->name('register');
Route::get('/AddCustomer', [CustomerController::class, 'add'])->name('customer.add');
Route::post('/CustomerCreate',[CustomerController::class, 'create'])->name('customer.create');



//private 

Route::middleware([AdminAuth::class, 'auth'])->group(function () {

    Route::get('/Admin', [AdminController::class, 'admin'])->name('admin.index');

    Route::prefix('user')->group(function () {
        Route::get('/list', [UserController::class, 'list'])->name('user.list');
        Route::get('/add', [UserController::class, 'add'])->name('user.add');
        Route::post('/create', [UserController::class, 'create'])->name('user.create');
        Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });

    Route::prefix('customer')->group(function () {
        Route::get('/list', [CustomerController::class, 'list'])->name('customer.list'); 
        Route::post('/create', [CustomerController::class, 'create'])->name('customers.create');
        Route::delete('/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
    });

    Route::prefix('category')->group(function () {
        Route::get('/list', [CategoryController::class, 'list'])->name('category.list');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    });

    Route::prefix('food')->group(function () {
        Route::get('/list', [FoodController::class, 'list'])->name('food.list');
        Route::post('/store', [FoodController::class, 'store'])->name('food.store');
        Route::get('/edit/{id}', [FoodController::class, 'edit'])->name('food.edit');
        Route::post('/update/{id}', [FoodController::class, 'update'])->name('food.update');
        Route::delete('/delete/{id}', [FoodController::class, 'destroy'])->name('food.delete');
    });

    Route::prefix('order')->group(function () {
        Route::get('/list', [OrderController::class, 'list'])->name('order.list');
        Route::post('/store', [OrderController::class, 'store'])->name('order.store');
        Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
        Route::post('/update/{id}', [OrderController::class, 'update'])->name('order.update');
        // Route::delete('/delete/{id}', [OrderController::class, 'destroy'])->name('order.delete');
    });

    Route::prefix('payment')->group(function () {
        Route::get('/list', [PaymentController::class, 'list'])->name('payment.list');
    });

    Route::prefix('report')->group(function () {
        Route::get('/list', [ReportController::class, 'list'])->name('report.list');
    });
});

