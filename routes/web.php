<?php
use App\Http\Controllers\ProductControllerCopy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('welcome');
});


//Route::resource('/products', ProductController::class);
Route::get('/products',[ProductController::class,'index'])->name('products-index');

Route::get('/products/create',[ProductController::class,'create'])->name('products-create');

Route::post('/products',[ProductController::class,'store'])->name('products-store');

Route::get('/products/show',[ProductController::class,'show'])->name('products-show');

//Route::get('/products/{products}',[ProductController::class,'show'])->name('products-show');

Route::get('/products/edit/{product}',[ProductController::class,'edit'])->name('products-edit');

Route::put('/products/{product}',[ProductController::class,'update'])->name('products-update');

Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('products-destroy');
