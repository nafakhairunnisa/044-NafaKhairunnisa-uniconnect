<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Login page
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Register page
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// UKM Event page
Route::get('/ukm/event', function () {
    return view('ukm.event');
})->name('ukm.event');

// UKM Profile page
Route::get('/ukm/profile', function () {
    return view('ukm.profile');
})->name('ukm.profile');

// Tentang Web page
Route::get('/ukm/achievement', function () {
    return view('ukm.achievement');
})->name('ukm.achievement');

// User Profile page
Route::get('/user/profile', function () {
    return view('user.profile');
})->name('user.profile');

// Menu UKM page
Route::get('/menu-ukm', function () {
    return view('menu-ukm');
})->name('menu-ukm');

// Berita UKM page
Route::get('/news', function () {
    return view('news');
})->name('news');

// Tentang Web page
Route::get('/about', function () {
    return view('about');
})->name('about');

