<?php

use Illuminate\Support\Facades\Route;
// Perlu diimport dari folder Models
use App\Models\Post;


Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
    // return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'sibeux',
        'title' => 'About',
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'posts' => Post::all(),
    ]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    // dd($slug);
    // $post = Post::find($slug);
    // dd($post);
    return view('blog-content', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});