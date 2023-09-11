@extends('layout.main')
@section('title', 'Teknik Sepeda Motor' )

@section('container')

<div class="container">
    @foreach ($tsmjurusan as $item)
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