<?php

use App\Http\Controllers\DataStoreController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;


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
Route::post('store',[DataStoreController::class,'index'])->name('store');
Route::view('data-output','output');
Route::post('ajax',[DataStoreController::class,'ajax']);

Route::post('sale',[SaleController::class,'index']);
Route::get('stock',[StockController::class,'index']);
