@extends('layout.main')
@section('title', 'Gallery')
@section('container')

<div class="container">
    <div class="row">
        @foreach ($gallery as $item)
        <div class="col-md-3 mb-4">
            <article class="portfolio-item">
                <figure class="portfolio-figure">
                    <a class="fancybox-pop" data-fancybox="gallery" href="{{ asset('images/' . $item->image) }}">
                        <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->nama }}"
                            class="img-thumbnail gallery-image" />
                        <div class="overlay-background"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>{{ $item->nama }}</h3>
                                <h4>{{ $item->type }}</h4>
                                <p>{!! $item->text !!}</p>
                            </div>
                        </div>
                    </a>
                </figure>
            </article>
        </div>
        @endforeach
    </div>
</div>


<style>
    .portfolio-figure {
        position: relative;
        overflow: hidden;
    }

    .gallery-image {
        transition: transform 0.3s;
    }

    .portfolio-figure:hover .gallery-image {
        transform: scale(1.1);
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.0);
        /* Change the background-color to transparent */
        opacity: 0;
        visibility: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px;
        color: white;
        transition: opacity 0.3s;
    }

    .overlay h3 {
        font-size: 20px;
        margin-bottom: 5px;
    }

    .overlay p {
        font-size: 14px;
        text-align: center;
    }

    /* Change the color of link icons to white */
    .overlay a {
        color: white;
    }

    .portfolio-figure:hover .overlay {
        opacity: 1;
        visibility: visible;
        background-color: rgba(0, 0, 0, 0.8);
        /* Add a background color on hover */
    }
</style>

@endsection