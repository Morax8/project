@extends('layout.main')
@section('title', 'Ekstrakulikuler')
@section('container')

<div class="container">
    <header>
        @foreach ($eskul as $item)
        <h2>{{ $item->title }}</h2>
    </header>
    {!! $item->content !!}
    @endforeach
</div>

<style>
    h2 {
        font-size: 25px;
    }

    figcaption {
        margin-bottom: 5vh;
    }

    p {
        font-size: 18px;
    }
</style>
@endsection