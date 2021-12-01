@extends('layouts/main')

@section('container')
<h1 class="mb-5">halama Blog Posts</h1>

@foreach ($posts as $post)
<div class="container">
    <article class="mt-5">
        <h2>
            <a href="/posts/{{$post->slug}}"> {{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
    </article>

</div>


@endforeach

@endsection