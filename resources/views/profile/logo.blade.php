@extends('layout.main')
@section('title', 'Logo' )

@section('container')

<div class="container">
    @foreach ($logoprof as $item)
    <header>
        <h1>
            {{ $item->title }}
        </h1>
    </header>
    {!! $item->content !!}
    @endforeach
</div>
<style>
    p,
    li {
        font-size: 18px;
    }

    .image-container {
        margin-bottom: 20px;
        /* Add margin at the bottom of the image */
    }
</style>
@endsection