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
  return redirect(route('login'));
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit_admin'])->name('edit_admin');
Route::post('/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');

// admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/pendaftar', [App\Http\Controllers\AdminController::class, 'pendaftar'])->name('pendaftar');
Route::get('/admin/pendaftar/get-pendaftar', [App\Http\Controllers\AdminController::class, 'get_pendaftar'])->name('get_pendaftar');
Route::get('/admin/pendaftar/download/{id}', [App\Http\Controllers\AdminController::class, 'download_pendaftar'])->name('download_pendaftar');
Route::get('/admin/user', [App\Http\Controllers\AdminController::class, 'user'])->name('user');
Route::get('/admin/user/get-user', [App\Http\Controllers\AdminController::class, 'get_user'])->name('get_user');
Route::post('/admin/user/del-user', [App\Http\Controllers\AdminController::class, 'user_delete'])->name('user_delete');
Route::get('/admin/setting', [App\Http\Controllers\AdminController::class, 'setting'])->name('setting');
Route::post('/admin/save-setting', [App\Http\Controllers\AdminController::class, 'edit_setting'])->name('save_setting');