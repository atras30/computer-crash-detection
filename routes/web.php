<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
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

//User endpoints
Route::get('/', [HomeController::class, "index"])->name("user.home");
Route::get('/about-us', [HomeController::class, "aboutUs"])->name("user.about_us");
Route::get('/choose-symptom', [HomeController::class, "chooseSymptom"])->name("user.choose_symptom");
Route::get('/result', [HomeController::class, "result"])->name("user.result");
Route::get('/auth/login', [HomeController::class, "login"])->name("auth.login")->middleware("guest");
Route::post('/auth/login', [AuthenticationController::class, "loginVerification"])->name("auth.loginVerification");
Route::post('/auth/logout', [AuthenticationController::class, "logout"])->name("auth.logout");

//Admin endpoints
Route::get('/admin', [AdminController::class, "index"])->name("admin.dashboard");
Route::get('/admin/data/gejala', [AdminController::class, "dataGejala"])->name("data.gejala");
Route::get('/admin/data/penyakit', [AdminController::class, "dataPenyakit"])->name("data.penyakit");
Route::get('/admin/data/riwayat', [AdminController::class, "dataRiwayat"])->name("data.riwayat");
