@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($posts as $post)
<div class="container text-center">
    <div class="row align-items-start">
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>
    </div>
</div>

@endforeach

@endsection