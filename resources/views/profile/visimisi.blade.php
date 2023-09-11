@extends('layout.main')
@section('title', 'Visi dan Misi' )

@section('container')

<div class="container">
    @foreach ($vmprof as $item)
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