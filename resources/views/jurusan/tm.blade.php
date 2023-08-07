@extends('layout.main')
@section('title', 'Teknik Mekatronika' )

@section('container')

<div class="container">
    @foreach ($tmjurusan as $item)
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