<?php

use App\Http\Controllers\HomeController;
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
//     return view('layout.v_template');
// });

// Route::view('/', [HomeController::class, 'home']);
// Route::view('/hadiah', 'hadiah.index');
Route::view('/user', 'user.index');
// Route::view('/', 'home.index');

Route::get('/', [HomeController::class, 'home']);


// hadiah
Route::get('/hadiah', [HomeController::class, 'index_hadiah']);
Route::get('/hadiah/add', [HomeController::class, 'hadiah_form']);
Route::get('/hadiah/{id}/edit', [HomeController::class, 'hadiah_form_edit']);
Route::post('/hadiah/save', [HomeController::class, 'hadiah_save']);
Route::post('/hadiah/{id}', [HomeController::class, 'hadiah_update']);
Route::get('/hadiah/delete/{id}', [HomeController::class, 'hadiah_delete']);

// customer
Route::get('/customer', [HomeController::class, 'customer']);
Route::get('/customer/add', [HomeController::class, 'customer_form']);
Route::post('/customer/save', [HomeController::class, 'customer_save']);
Route::get('/customer/{id}/edit', [HomeController::class, 'customer_form_edit']);
Route::post('/customer/{id}', [HomeController::class, 'customer_update']);
Route::get('/customer/delete/{id}', [HomeController::class, 'customer_delete']);

// barang
Route::get('/barang', [HomeController::class, 'barang']);
Route::get('/barang/add', [HomeController::class, 'barang_form']);
Route::post('/barang/save', [HomeController::class, 'barang_save']);
Route::get('/barang/{id}/edit', [HomeController::class, 'barang_form_edit']);
Route::post('/barang/{id}', [HomeController::class, 'barang_update']);
Route::get('/barang/delete/{id}', [HomeController::class, 'barang_delete']);

// pembelian
Route::get('/pembelian', [HomeController::class, 'pembelian']);
Route::get('/pembelian/add', [HomeController::class, 'pembelian_form']);
// Route::post('/pembelian/save', [HomeController::class, 'pembelian_save_detail']);
Route::post('/pembelian/save', [HomeController::class, 'pembelian_save']);
// Route::get('/pembelian/{id}/edit', [HomeController::class, 'pembelian_form_edit']);
// Route::post('/pembelian/{id}', [HomeController::class, 'pembelian_update']);
// Route::get('/pembelian/delete/{id}', [HomeController::class, 'pembelian_delete']);
Route::get('/pembelian/details/{id}', [HomeController::class, 'getHarga']);
Route::get('/pembelian/last_point/{id}', [HomeController::class, 'last_point']);


