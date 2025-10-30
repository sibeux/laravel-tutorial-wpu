<?php

use Illuminate\Support\Facades\Route;

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
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Nasrul Wahabi',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores adipisci amet minus voluptatum magni
            voluptatem reiciendis libero optio, quisquam saepe rerum, dignissimos placeat facilis quaerat cum alias
            reprehenderit blanditiis quod.',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Sibeux',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat saepe, itaque doloremque molestias autem,
            ut asperiores numquam facere atque temporibus voluptatem commodi dolorem incidunt dolores corrupti, deleniti
            reiciendis voluptatum quis?',
            ],
        ],
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    // dd($slug);
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Nasrul Wahabi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores adipisci amet minus voluptatum magni
            voluptatem reiciendis libero optio, quisquam saepe rerum, dignissimos placeat facilis quaerat cum alias
            reprehenderit blanditiis quod.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Sibeux',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat saepe, itaque doloremque molestias autem,
            ut asperiores numquam facere atque temporibus voluptatem commodi dolorem incidunt dolores corrupti, deleniti
            reiciendis voluptatum quis?',
        ],
    ];

    // use ($slug) berfungsi semacam global $slug
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // dd($post);

    return view('blog-content', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
