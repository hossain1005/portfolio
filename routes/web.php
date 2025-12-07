<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Home Page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Projects Page (Dynamic - Database)
Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects');

// Contact Page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');



