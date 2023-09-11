@extends('layout.main')
@section('title', 'Berita')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>Published {{ $post->created_at->diffForHumans() }}</p>

            <div class="text-center" style="position: relative; height: 500px; overflow: hidden;">
                <img src="{{ asset('images/' . $post->image ) }}" class="card-img-top"
                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-height: 100%; width: auto;"
                    alt="berita sekolah">
            </div>
            <br>
            <br>
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>


            <a href="/news" class="d-block mt-3 text-decoration-none">Back to Posts</a>
        </div>
    </div>
</div>
<style>
    h2 {
        font-size: 25px;
    }

    p {
        font-size: 20px;
    }
</style>

@endsection