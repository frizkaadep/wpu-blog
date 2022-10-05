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

    // relasi db ke category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
