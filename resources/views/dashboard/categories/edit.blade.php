@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Categories</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/categories/{{ $category->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name Category</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name', $category->name) }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    required value="{{ old('slug', $category->slug) }}">
                @error('slug')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
    <script>
        const name = document.querySelectorAll('#name');
        const slug = document.querySelectorAll('#slug');
        name[0].addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + name[0].value)
                .then(response => response.json())
                .then(data => slug[0].value = data.slug)
        });
    </script>
@endsection
