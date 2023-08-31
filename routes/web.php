<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;


Route::get('/user', [UserController::class, 'index']);
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

Route::get('/', [HomeController::class,'index']);
Route::get('/product/create', [ProductController::class,'create']);
Route::get('/report', [ReportController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);
Route::get('/product', [ProductController::class,'index']);
Route::get('/logout', [LogoutController::class,'index']);
Route::post('/product', [ProductController::class,'store']);
Route::post('/product', [ProductController::class,'store']);
Route::get('/product/create{id}', [ProductController::class,'edit']);
Route::delete('/product/{id}', [ProductController::class,'destroy']);
Route::resource('/product',ProductController::class);