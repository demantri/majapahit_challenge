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

Route::get('/', function () {
    return view('layout.v_template');
});

// Route::view('/hadiah', 'hadiah.index');
Route::view('/user', 'user.index');

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

// point
Route::get('/point', [HomeController::class, 'point']);
Route::get('/point/add', [HomeController::class, 'point_form']);
Route::post('/point/save', [HomeController::class, 'point_save']);
Route::get('/point/{id}/edit', [HomeController::class, 'point_form_edit']);
Route::post('/point/{id}', [HomeController::class, 'point_update']);
Route::get('/point/delete/{id}', [HomeController::class, 'point_delete']);

