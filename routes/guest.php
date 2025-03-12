<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestRouteController;

Route::controller(GuestRouteController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/message', 'message')->name('message');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/media-coverage', 'media')->name('media-coverage');

});
