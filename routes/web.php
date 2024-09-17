<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/post', function () {
    return view('post', ['title' => 'Blog', 'post' => Post::all()]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('detail-post', ['title' => 'Blog', 'post' => $post]);
});

Route::get('/author/{user:username}', function (User $user) {
    return view('post', ['title' => count($user->post) . ' Post by ' . $user->name, 'post' => $user->post]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('post', ['title' => 'Post in : ' . $category->name, 'post' => $category->post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
