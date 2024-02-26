<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index']);
