<?php

use App\Http\Controllers\apiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/getApi', [apiController::class, 'index']);
Route::get('/hadiah', [apiController::class, 'index']);
// Route::get('/hadiah/add', [apiController::class, 'hadiah_form']);
// Route::get('/hadiah/{id}/edit', [HomeController::class, 'hadiah_form_edit']);
Route::post('/hadiah/save', [apiController::class, 'create']);
// Route::post('/hadiah/{id}', [HomeController::class, 'hadiah_update']);
// Route::get('/hadiah/delete/{id}', [HomeController::class, 'hadiah_delete']);
