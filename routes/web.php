<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\NewController;
Route::get('/', [NewController::class, 'welcome']);
Route::get('/about', [NewController::class, 'about']);
Route::get('/contact', [NewController::class, 'contact']);
Route::get('/video', [NewController::class, 'showVideo']);
Route::post('/add', [NewController::class, 'add']);

