<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
    // return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/job-details', function () {
//     return view('job-details');
// });

// Route::get('/job-listings', function () {
//     return view('job-listings');
// });

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/about', [PageController::class,'about'])->name('page.about');
Route::get('/contact', [PageController::class,'contact'])->name('page.contact');
Route::get('/job-details', [PageController::class,'JobDetails'])->name('page.jobdetails');
Route::get('/job-listings', [PageController::class,'JobListings'])->name('page.joblistings');
