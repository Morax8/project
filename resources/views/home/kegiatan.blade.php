@extends('layout.main')
@section('title', 'Kegiatan')
@section('container')


<div class="container">

    <h1>{{ $kegiatan->title }}</h1>

    <p>
        {!! $kegiatan->content !!}
     </p>
    </div>
    <style>
        p,h1{
            font-size: 18px;
        }
    </style>
@endsection
