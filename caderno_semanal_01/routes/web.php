<?php

use App\Http\Controllers\ControladorA;
use App\Http\Controllers\ControladorB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/ctrla', ControladorA::class);
Route::resource('/ctrlb', ControladorB::class);