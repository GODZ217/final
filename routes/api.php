<?php

use App\Http\Controllers\API\ApiElearningController;
use App\Http\Controllers\API\ElearningController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::apiResource('elearning','App\Http\Controllers\API\ElearningController', [
    "only" => ["store","index","edit","destroy"]
   ]);

Route::post('elearning/{id}',[ElearningController::class,'update'])->name('elearnings.update');   

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
