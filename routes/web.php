<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\GroupController;
use \App\Http\Controllers\BrandController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\StoreController;
use \App\Http\Controllers\AttributeController;
use \App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [LoginController::class, 'index'])->name('/');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/groups', [GroupController::class, 'index'])->name('groups');
Route::get('/group/create', [GroupController::class, 'create'])->name('group/create');
Route::post('/group/create', [GroupController::class, 'store'])->name('group/create');

Route::get('/brands', [BrandController::class, 'index'])->name('brands');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/stores', [StoreController::class, 'index'])->name('stores');

Route::get('/attributes', [AttributeController::class, 'index'])->name('attributes');
