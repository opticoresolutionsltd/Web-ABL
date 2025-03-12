<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestRouteController;
use App\Http\Controllers\ProjectRouteController;

Route::controller(GuestRouteController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/message', 'message')->name('message');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/media-coverage', 'media')->name('media-coverage');

});

Route::controller(ProjectRouteController::class)->group(function(){
    Route::get('/all-projects', 'allProjects')->name('all-projects');
    Route::get('/upcoming-project', 'upcomingProject')->name('upcoming-project');
    Route::get('/ongoing-project', 'ongoingProject')->name('ongoing-project');
    Route::get('/handover-project', 'handoverProject')->name('handover-project');
});
