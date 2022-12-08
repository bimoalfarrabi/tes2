<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BarangController;
use App\Http\Controllers\Backend\KaryawanController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

//semua route untuk user

Route::prefix('users')->group(function(){
    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');
});

//semua route untuk barang

Route::prefix('barangs')->group(function(){
    Route::get('/view', [BarangController::class, 'BarangView'])->name('barang.view');
    Route::get('/add',[BarangController::class, 'BarangAdd'])->name('barang.add');
    Route::post('/store',[BarangController::class, 'BarangStore'])->name('barang.store');
    Route::get('edit/{id}',[BarangController::class, 'BarangEdit'])->name('barangs.edit');
    Route::post('/update/{id}',[BarangController::class, 'BarangUpdate'])->name('barangs.update');
    Route::get('/delete/{id}',[BarangController::class, 'BarangDelete'])->name('barangs.delete');
});

Route::prefix('karyawans')->group(function(){
    Route::get('/view', [KaryawanController::class, 'KaryawanView'])->name('karyawan.view');
    Route::get('/add',[KaryawanController::class, 'KaryawanAdd'])->name('karyawan.add');
    Route::post('/store',[KaryawanController::class, 'KaryawanStore'])->name('karyawan.store');
    Route::get('edit/{id}',[KaryawanController::class, 'KaryawanEdit'])->name('karyawans.edit');
    Route::post('/update/{id}',[KaryawanController::class, 'KaryawanUpdate'])->name('karyawans.update');
    Route::get('/delete/{id}',[KaryawanController::class, 'KaryawanDelete'])->name('karyawans.delete');
});