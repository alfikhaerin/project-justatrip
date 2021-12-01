
@extends('layouts.blog')

@section('container')

<div class="container">
<article style="text-align: justify">
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}

    <a href="/blog">back</a>
</article>
</div>


@endsection
