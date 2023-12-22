<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Auth;


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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin', 'as'=>'b.', 'middleware'=>'auth'], function () {
    Route::get('', [B\DashboardController::class, 'index'])->name('dashboard');
    Route::get('basic-table', [B\DashboardController::class, 'basic_table'])->name('basic_table');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
