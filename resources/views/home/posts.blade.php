@extends('layout.main')
@section('title', 'News')
@section('container')

@if ($posts->count())

<div class="container mt-5">
    <h2>
        Berita Terkini Tentang SMK STRADA JAKARTA
    </h2>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="text-center" style="position: relative; height: 500px; overflow: hidden;">
                    <img src="{{ asset('images/' . $posts[0]->image ) }}" class="card-img-top"
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-height: 100%; width: auto;"
                        alt="berita sekolah">
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title">
                        <a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                            {{ $posts[0]->title }}
                        </a>
                    </h2>
                    <p>
                        <small class="text-muted">
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more..</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4">
            <article class="d-flex flex-column h-100">
                <img class="img-thumbnail" src="{{ asset('images/' . $post->image) }}" alt="" />
                <h2>{{ $post->title }}</h2>
                <hr class="title-underline" />
                <p>
                    <small class="text-muted">
                        {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>

                <a href="/news/{post:slug}" class="btn btn-xs btn-primary mt-auto">Read more...</a>
            </article>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No post found.</p>
@endif


<!-- Pagination links -->
<div class="container">
    <div class="d-flex mx-auto">
        {{ $posts->links() }}
    </div>
</div>

<style>
    h2 {
        font-size: 25px;
    }
</style>

@endsection