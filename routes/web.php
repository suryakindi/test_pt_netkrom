<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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

##Route LandingPage

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/contact', [LandingPageController::class, 'contact']);
Route::get('/tiket/{slug}', [LandingPageController::class, 'ticketing']);
Route::post('/tiket/{slug}', [LandingPageController::class, 'ticketing']);
Route::get('/tiket/{slug}/cetak/{id}', [LandingPageController::class, 'cetakticketing']);

##Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);

##Route Panel
Route::group(['middleware'=>'auth'], function(){
  Route::get('/dashboard', [DashboardController::class, 'index']);
  Route::post('/dashboard/update/{id}', [DashboardController::class, 'update']);
  Route::get('/dashboard/{slug}', [DashboardController::class, 'status']);
  Route::get('/dashboard/edit/{id}', [DashboardController::class, 'editticket']);
  Route::post('/dashboard/edit/{id}', [DashboardController::class, 'editticket']);
  Route::get('/dashboard/hapus/{id}', [DashboardController::class, 'hapusticket']);
});
