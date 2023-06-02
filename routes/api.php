<?php

use App\Http\Controllers\OperationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/add/{operatorA}/{operatorB}",[OperationController::class,'add']);
Route::get("/subtract/{operatorA}/{operatorB}",[OperationController::class,'subtract']);
Route::get("/multiply/{operatorA}/{operatorB}",[OperationController::class,'multiply']);
Route::get("/divide/{operatorA}/{operatorB}",[OperationController::class,'divide']);
