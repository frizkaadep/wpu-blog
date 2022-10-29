<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "Frizka Ade",
            "email" => "frizkaade@gmail.com",
            "image" => "fade.jpg",
        ]);
    }
}
