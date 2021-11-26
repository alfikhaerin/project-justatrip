@extends('layouts.main')

@section('container')

<div class="container">

    <h1>Halaman about</h1>
    <h3>{{ $name }}</h3>
    <h3> {{ $email }}</h3>
    <img src="images/{{$image}}" alt="img1.png">
</div>
@endsection