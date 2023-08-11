@extends('layout.main')
@section('title', 'Fasilitas')
@section('container')

<div class="container">
    @foreach ($fasilitas as $item)
    <header>
        <h1>{{ $item->title }}</h1>
    </header>

    {!! $item->content !!}
    @endforeach
    <p></p>
</div>

<style>
    li {
        font-size: 20px;
    }
</style>
@endsection