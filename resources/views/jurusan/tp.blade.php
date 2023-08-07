@extends('layout.main')
@section('title', 'Teknik Pemesinan' )

@section('container')

<div class="container">
    @foreach ($tpjurusan as $item)
    <header>
        <h1>
            {{ $item->title }}
        </h1>
    </header>
    {!! $item->content !!}
    @endforeach
</div>
@include('partials.footer')
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