<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class , 'adminLoginForm']);

Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class , 'adminLogin'])->name('admin.login');

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin.home');
