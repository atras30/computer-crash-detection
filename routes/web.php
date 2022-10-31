<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, "index"]);
Route::get('/admin', [AdminController::class, "index"])->name("admin.dashboard");
Route::get('/admin/data/gejala', [AdminController::class, "dataGejala"])->name("data.gejala");
Route::get('/admin/data/penyakit', [AdminController::class, "dataPenyakit"])->name("data.penyakit");
Route::get('/admin/data/riwayat', [AdminController::class, "dataRiwayat"])->name("data.riwayat");
