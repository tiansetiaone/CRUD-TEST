<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;

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


Route::middleware(['auth'])->group(function(){

Route::get('/',[PenjualanController::class,'index']);
Route::get('/penjualan/create',[PenjualanController::class,'create']);
Route::post('/penjualan/store',[PenjualanController::class,'store']);
Route::get('/penjualan/{id}/edit',[PenjualanController::class,'edit']);
Route::put('/penjualan/{id}',[PenjualanController::class,'update']);
Route::delete('/penjualan/{id}',[PenjualanController::class,'destroy']);
Route::get('/penjualan/search',[PenjualanController::class,'search']);
Route::get('/penjualan/index-paging', [PenjualanController::class,'indexPaging']);
Route::get('/penjualan/index-sorting', [PenjualanController::class,'indexSorting']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
