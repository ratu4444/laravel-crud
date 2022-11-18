<?php
use App\Http\Controllers\ProductControllerCopy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::resource('/products', ProductController::class);
Route::get('/products',[ProductController::class,'index'])->name('products-index');

Route::get('/products/create',[ProductController::class,'create'])->name('products-create');

Route::post('/products',[ProductController::class,'store'])->name('products.store');

Route::get('/products/show',[ProductController::class,'show'])->name('products.show');

//Route::get('/products/{products}',[ProductController::class,'show'])->name('products.show');

Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');

Route::put('/products/{products}',[ProductController::class,'update'])->name('products.update');

Route::delete('/products/{products}',[ProductController::class,'destroy'])->name('products.destroy');
