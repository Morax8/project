@extends('layout.main')
@section('container')

@if ($posts->count())
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
                <img src="https://source.unsplash.com/1200x400?berita-sekolah" class="card-img-top"
                    alt="berita sekolah">
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
                <img class="img-thumbnail" src="https://source.unsplash.com/690x527?berita-sekolah" alt="" />
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

@endsection