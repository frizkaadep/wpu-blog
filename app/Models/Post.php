<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // fungsi agar form bisa di isi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // fungsi mengecualikan / tidak boleh di isi oleh fungsi 'create'
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // versi isset (blm di ganti, masih pake callback)
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', "%" . $search . '%');
        });

        // versi callback function
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // versi arrow function
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    // relasi db ke table category
    public function category()
    {
        // 1 Post memiliki 1 category
        return $this->belongsTo(Category::class);
    }

    // relasi DB ke table User
    public function author()
    {
        // 1 post memiliki 1 author
        // 'user_id' alias untuk 'author' yg tidak ada di table user, field author
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
