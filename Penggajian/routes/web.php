<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use Illuminate\Support\Facades\Route;

Route::get('/Home',[IndexController::class,'index']);
Route::get('/jabatan/index',[JabatanController::class,'index']);
Route::get('/jabatan/create',[JabatanController::class,'create']);
Route::get('/jabatan/edit',[JabatanController::class,'show']);
Route::get('/karyawan/index',[KaryawanController::class,'index']);
Route::get('/karyawan/create',[KaryawanController::class,'create']);
Route::get('/karyawan/edit',[KaryawanController::class,'show']);
Route::get('/Gaji/index',[GajiController::class,'index']);
Route::get('/Gaji/create',[GajiController::class,'create']);
Route::get('/Gaji/edit',[GajiController::class,'show']);

// Route::get('/', function () {
//     return view('welcome');
// });
 