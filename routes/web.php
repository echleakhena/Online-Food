                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    CategoryController,
    CustomerController,
    FoodController,
    OrderController,
    PaymentController,
    ReportController,
    UserController
};


Route::get('/', function(){
    return view('Frontend.index');
});



Route::prefix('admin')->group(function () {                                                                                                                                                                                                                                                                             
    Route::get('/Admin', [AdminController::class, 'admin'])->name('admin.index');
});


Route::prefix('user')->group(function () {
    Route::get('/List', [UserController::class, 'list'])->name('user.list');
});                                                                                                                                                                                 


Route::prefix('customer')->group(function () {
    Route::get('/List', [CustomerController::class, 'list'])->name('customer.list');                                            
});


Route::prefix('category')->group(function () {
    Route::get('/List', [CategoryController::class, 'list'])->name('category.list');
});


Route::prefix('food')->group(function () {
    Route::get('/List', [FoodController::class, 'list'])->name('food.list');
});


Route::prefix('order')->group(function () {
    Route::get('/List', [OrderController::class, 'list'])->name('order.list');
});


Route::prefix('payment')->group(function () {
    Route::get('/List', [PaymentController::class, 'list'])->name('payment.list');
});


Route::prefix('report')->group(function () {
    Route::get('/List', [ReportController::class, 'list'])->name('report.list');
});
