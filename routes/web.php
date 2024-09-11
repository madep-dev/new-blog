<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/post', function () {
    return view('post', ['title' => 'Blog']);
});

Route::get('/post/detail', function () {
    return view('detail-post', ['title' => 'Blog']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
