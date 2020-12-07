<?php

use App\Http\Controllers\UtamaController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PemesananController;

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


Route::get("/", [UtamaController::class, "home"])->name("home");
Route::get("/about", [UtamaController::class, "about"])->name("about");
Route::get("/contact", [UtamaController::class, "contact"])->name("contact");

Route::get("/loker", [LokerController::class, "loker"])->name("loker");
Route::post("/proses", [LokerController::class, "proses"])->name("proses");

Route::get("/pemesanan", [PemesananController::class, "pemesanan"])->name("pemesanan");
Route::post("/pemesanan/proses", [PemesananController::class, "tambah"])->name("pemesanan_tambah");
