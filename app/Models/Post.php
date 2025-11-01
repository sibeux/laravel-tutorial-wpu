<?php

// Harus pakai namespace biar tidak bentrok dengan fungsi laravel bawaan.
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model // by default langsung terhubung ke tabel db posts
{
    // ! Perlu ini
    use HasFactory;
    // Opsional -> jika ingin dihubungkan ke table lain.
    // protected $table = 'blog_posts';
    // by default pakai {id}
    // Opsional -> jika {id} namanya beda.
    // protected $primaryKey = 'post_id';

    // pilih salah satu
    // apa kolom yang boleh diisi.
    protected $fillable = ['title', 'author', 'slug', 'body'];
    // apa kolom yang tidak boleh diisi.
    // protected $guarded = ['id'];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
