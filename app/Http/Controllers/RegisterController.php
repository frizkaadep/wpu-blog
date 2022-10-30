<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);
        // enkripsi password dengan bcrypt

        // 1. menggunakan php
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // 2. menggunakan code dari laravel
        $validatedData['password'] = Hash::make($validatedData['password']);
        // push data ke DB
        User::create($validatedData);

        // mengirim value registrasi berhasil dan mengirim message ke halaman login
        // $request->session()->flash('success', 'Registration successfull! Please login');

        // redirect setelah sukses registrasi dengan membawa flash message
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
