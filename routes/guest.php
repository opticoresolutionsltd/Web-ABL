<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestRouteController;

Route::controller(GuestRouteController::class)->group(function(){
    Route::get('/', 'home')->name('home');
});
