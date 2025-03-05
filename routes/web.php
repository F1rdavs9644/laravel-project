<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/job-details', function () {
    return view('job-details');
});

Route::get('/job-listings', function () {
    return view('job-listings');
});
