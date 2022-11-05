<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/trangchu', [PageController::class, 'getIndex']);
Route::get('/product_model', [PageController::class, 'getModel']);
Route::get('/product_detail', [PageController::class, 'getDetail']);

Route::get('/type/{id}',[PageController::class, 'getLoaiSp']);

Route::get('/detail/{id}',[PageController::class, 'getDetail']);

Route::get('/contact', [PageController::class, 'getContact']);
Route::get('/about', [PageController::class, 'getAbout']);

Route::get('loai-san-pham/{type}', [PageController::class,'getLoaiSp']);

Route::get('chi-tiet-san-pham', [PageController::class,'getLienhe']);