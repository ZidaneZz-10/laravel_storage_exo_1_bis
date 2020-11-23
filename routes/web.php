<?php

use App\Http\Controllers\ImageController;
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

Route::get('/',[ImageController::class,'index']);
Route::post('/image/store', [ImageController::class, 'store']);
Route::get('/image/{id}/edit', [ImageController::class, 'edit']);
Route::post('/image/{id}/update', [ImageController::class, 'update']);
Route::get('/image/{id}/download', [ImageController::class, 'download']);

