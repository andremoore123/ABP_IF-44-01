<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function (){
    return "Hello world";
});

Route::controller(ProdukController::class)->group(function (){
    Route::get("create","create")->name("product.create");
    Route::get('products', 'index',)->name("product.index");
    Route::post('products', 'store')->name("product.store");
    Route::get("edit/{id}","edit")->name("product.edit");
    Route::put("update/{id}", "update")->name("product.update");
    Route::delete("delete/{id}", "destroy")->name("product.delete");
});
