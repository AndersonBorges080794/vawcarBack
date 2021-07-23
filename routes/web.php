<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DataScraping;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/thumb/{path}/{img}', [ImageController::class, 'thumb']);
Route::post('/register', [AuthController::class, 'store']);


//Route::get('/olx/{id}', [DataScraping::class, 'index']);