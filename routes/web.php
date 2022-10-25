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

Route::get('/trangchu',[PageController::class, 'getIndex']);
Route::get('loai_sanpham',[PageController::class, 'getLoaiSp']);
Route::get('/chitiet_sanpham',[PageController::class, 'getChitiet']);
Route::get('/lienhe',[PageController::class, 'getLienhe']);
Route::get('/about',[PageController::class, 'getAbout']);