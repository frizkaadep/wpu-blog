@extends("layouts.main")

@section('container')
<article class="card text-center">
    <h1 class="card-header">Halaman About</h1>
    <div class="card-body">
        <h3 class="card-title">{{ $name }}</h3>
        <p class="card-text">{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-fluid rounded-circle">
    </div>

</article>
@endsection