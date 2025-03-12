<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestRouteController;

Route::controller(GuestRouteController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/profile', 'profile')->name('profile');
    
});
