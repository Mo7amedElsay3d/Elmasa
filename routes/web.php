<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', [BookingController::class, 'index']);
Route::get('/package/{id}', [BookingController::class, 'show']);
Route::get('/booked-dates', [BookingController::class,'bookedDates']);

Route::post('/booking', [BookingController::class, 'store'])
    ->name('booking.store');

Route::get('/booking/success',function(){
    return view('booking-success');
})->name('booking.success');    