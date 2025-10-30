<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    // return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['name' => 'sibeux']);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});