<?php

// Harus pakai namespace biar tidak bentrok dengan fungsi laravel bawaan.
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat saepe, itaque doloremque molestias
    autem,
    ut asperiores numquam facere atque temporibus voluptatem commodi dolorem incidunt dolores corrupti, deleniti
    reiciendis voluptatum quis?',
            ],
        ];
    }

    public static function find($slug): array
    {
        // use ($slug) berfungsi semacam global $slug
        // Gunakan _static_ untuk memanggil method static di class yang sama.
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}