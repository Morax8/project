@extends('layout.main')
@section('title', 'Perpustakaan')
@section('container')

<div class="container">
    @foreach ($perpus as $item)
    <header>
        <h1>{{ $item->title }}</h1>
    </header>

    {!! $item->content !!}
    @endforeach
    <p></p>
</div>

<style>
    li,
    p,
    td {
        font-size: 18px;
    }
</style>

@endsection