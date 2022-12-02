@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Categories</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/categories" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Category Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    autofocus value="{{ old('name') }}" required>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug Category</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug') }}" reauired>
                @error('slug')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
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
