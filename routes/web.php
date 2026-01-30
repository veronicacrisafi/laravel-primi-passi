<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $benvenuto = 'Welcome in my Laravel!';
    return view('home', compact('benvenuto'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
