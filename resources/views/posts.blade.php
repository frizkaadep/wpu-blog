@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Blog Posts</h1>
@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-3">
    <div class="container text-center">
        <div class="row align-items-start">
            <h2><a href="#" class="text-decoration-none">{{ $post->title }}</a></h2>
            <p>By. <a href="/authors/{{ $post->user->id }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug  }}" class="text-decoration-none">{{ $post->category->name  }}</a></p>
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
        </div>
    </div>
</article>
@endforeach

@endsection