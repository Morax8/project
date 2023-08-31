@extends('layout.main')
@section('title', 'Ekstrakurikuler')
@section('container')

<div class="container">
    <header>
        <h1>{{ $eskul->title }}</h1>
    </header>
    {!! $eskul->content !!}
</div>



<style>
    p,
    li,
    ul {
        font-size: 20px;
    }
</style>

@endsection