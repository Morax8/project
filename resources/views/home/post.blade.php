@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>Published {{ $post->created_at->diffForHumans() }}</p>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>


            <a href="/news" class="d-block mt-3 text-decoration-none">Back to Posts</a>
        </div>
    </div>
</div>
<style>
    p {
        font-size: 20px;
    }
</style>

@endsection