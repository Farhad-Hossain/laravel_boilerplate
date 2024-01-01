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
    Route::group(['prefix'=>'permission', 'as'=>'permission.'], function () {
        Route::get('/roles', [B\PermissionManageController::class, 'getRoles'])->name('roles');
        Route::post('/create-role', [B\PermissionManageController::class, 'createRole'])->name('create_role');
        Route::match(['GET','POST'],'/role-details', [B\PermissionManageController::class, 'getPostRoleDetails'])->name('role.details');

        Route::get('/permisions', [B\PermissionManageController::class, 'getPermissions'])->name('list');
        Route::post('/permisions/create', [B\PermissionManageController::class, 'createPermission'])->name('permission.create');
    });


    Route::get('', [B\DashboardController::class, 'index'])->name('dashboard');
    Route::get('basic-table', [B\DashboardController::class, 'basic_table'])->name('basic_table');

    
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
