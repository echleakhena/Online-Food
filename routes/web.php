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
                                                                                                                                                                                                                                                                          
Route::get('/Admin', [AdminController::class, 'admin'])->name('admin.index');

Route::get('/FormRegister',[CustomerController::class, 'rigister'])->name('register');
Route::get('/AddCustomer', [CustomerController::class, 'add'])->name('customer.add');
Route::post('/CustomerCreate',[CustomerController::class, 'create'])->name('customer.create');



Route::prefix('user')->group(function () {
    Route::get('/List', [UserController::class, 'list'])->name('user.list');
    Route::get('/Add',[UserController::class, 'add'])->name('user.add');
    Route::post('/Create',[UserController::class, 'create'])->name('user.create');
    Route::post('/Delete/{id}',[UserController::class, 'delete'])->name('user.delete');

});                                                                                                                                                                                 


Route::prefix('customer')->group(function () {
    Route::get('/List', [CustomerController::class, 'list'])->name('customer.list'); 
    Route::post('/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
                                    
});


Route::prefix('category')->group(function () {
    Route::get('/List', [CategoryController::class, 'list'])->name('category.list');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});


Route::prefix('food')->group(function () {
    Route::get('/List', [FoodController::class, 'list'])->name('food.list');
    Route::post('/store', [FoodController::class, 'store'])->name('food.store');
    Route::get('/edit/{id}', [FoodController::class, 'edit'])->name('food.edit');
    Route::post('/update/{id}', [FoodController::class, 'update'])->name('food.update');
    Route::delete('/delete/{id}', [FoodController::class, 'destroy'])->name('food.delete');
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
