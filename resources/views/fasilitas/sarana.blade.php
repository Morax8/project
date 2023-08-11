@extends('layout.main')
@section('title', 'Fasilitas')
@section('container')

<div class="container">
    @foreach ($sarana as $item)
    <header>
        <h1>{{ $item->title }}</h1>
    </header>

    {!! $item->content !!}
    @endforeach
    <p></p>
</div>

<style>
    figure {
        margin-bottom: 20px;
    }

    figcaption {
        font-size: 20px;
    }
</style>
</div>
@endsection