<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cafe-amandemy',[ProdukController::class,'product']);
Route::get('/products', [ProductController::class, 'products'])->name('product.create');

Route::get('/form',[ProductController::class,'form'])->name("form.create");
Route::post('/form',[ProductController::class,'formCreate'])->name("form.store");

/* route admin */

Route::get('/admin',[ProductController::class,'admin'])->name('admin.create');
    
Route::get('/form/edit/{id}', [ProductController::class,'formEdit'])->name('form.edit');
Route::put('/form/update/{id}',[ProductController::class,'formUpdate'])->name('form.update');
Route::get('/form/delete/{id}', [ProductController::class,'formDelete'])->name('form.delete');
