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
    Route::group(['prefix'=>'software', 'as'=>'software.'], function (){
        Route::match(['GET', 'POST'], '/settings', [B\SoftwareSettingsController::class, 'index'])->name('settings');
    });

    Route::get('/dashboard', [B\DashboardController::class,'index'])->name('dashboard');

    Route::group(['prefix'=>'permission', 'as'=>'permission.'], function () {
        Route::get('/roles', [B\PermissionManageController::class, 'getRoles'])->name('roles');
        Route::post('/create-role', [B\PermissionManageController::class, 'createRole'])->name('create_role');
        Route::match(['GET','POST'],'/role-details/{role_id}', [B\PermissionManageController::class, 'getPostRoleDetails'])->name('role.details');

        Route::get('/permisions', [B\PermissionManageController::class, 'getPermissions'])->name('list');
        Route::post('/permisions/create', [B\PermissionManageController::class, 'createPermission'])->name('permission.create');
    });

    Route::group(['prefix'=>'user', 'as'=>'users.'], function (){
        Route::get('/list', [B\UserManageController::class, 'getUserList'])->name('list');
        Route::match(['GET', 'POST'], '/save/{user_id?}', [B\UserManageController::class, 'saveUser'])->name('save');
        Route::get('/user/{id}', [B\UserManageController::class, 'userDetails'])->name('details');
    });


    Route::get('', [B\DashboardController::class, 'index'])->name('dashboard');
    Route::get('basic-table', [B\DashboardController::class, 'basic_table'])->name('basic_table');

    
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
