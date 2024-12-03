<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;


Route::get("/dashboard", [GuestController::class,"dashboard"])->name("dashboard");

Route::get('/', function () {
    return view('landing');
});
