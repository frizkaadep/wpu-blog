<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // fungsi agar form bisa di isi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // fungsi mengecualikan / tidak boleh di isi oleh fungsi 'create'
    protected $guarded = ['id'];
    protected $with = ['category','author'];

    // relasi db ke table category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relasi DB ke table User
    public function author()
    {
        // 'user_id' alias untuk 'author' yg tidak ada di table user, field author
        return $this->belongsTo(User::class, 'user_id');
    }
}
