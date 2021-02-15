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
Route::post('/hadiah/save', [HomeController::class, 'hadiah_save']);


