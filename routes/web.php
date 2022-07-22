<?php

use App\Http\Controllers\API\NumberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElearningController;

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

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/elearning',[ElearningController::class,'index'])->name('elearning');
Route::get('/create-elearning',[ElearningController::class,'create'])->name('create-elearning');
Route::post('/simpan-data',[ElearningController::class,'store'])->name('simpan-data');
Route::get('/edit/{id}',[ElearningController::class,'edit'])->name('edit');
Route::get('/delete/{id}',[ElearningController::class,'destroy']);
Route::post('/update-data/{id}',[ElearningController::class,'update'])->name('update-data');



Route::get('/', function () {
    return view('dashboard');
});
