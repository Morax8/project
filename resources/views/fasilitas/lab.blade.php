@extends('layout.main')
@section('title', 'Laboratorium')
@section('container')

<div class="container">
    @foreach ($lab as $item)
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