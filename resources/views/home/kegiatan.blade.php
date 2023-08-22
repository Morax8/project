@extends('layout.main')
@section('title', 'Kegiatan')
@section('container')
    <div class="container">
        <header>
     <h1>{{ $kegiatan->title }}</h1>
        </header>
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
