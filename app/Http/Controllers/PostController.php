<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",

            // menampilkan semua data
            // "posts" => Post::all(),

            // mengurutkan data berdasarkan terakhir di buat
            "posts" => Post::latest()->get()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
