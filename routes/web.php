<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';

Route::resource('rooms', RoomController::class);
Route::resource('customers', CustomerController::class);
Route::resource('reservations', ReservationController::class);
