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

Route::resource('/contracts', App\Http\Controllers\ContractController::class);
Route::resource('/employees', App\Http\Controllers\EmployeeController::class);
Route::resource('/positions', App\Http\Controllers\PositionController::class);
