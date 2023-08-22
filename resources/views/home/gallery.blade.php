@extends('layout.main')
@section('title', 'Gallery')
@section('container')
<div class="container">
    <h1>Gallery</h1>
</div>
<div class="row">
    @foreach ($gallery as $item)
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body custom-card">
                <a class=" fancybox-pop" data-fancybox="gallery" href="{{ asset('images/' . $item->image) }}">
                    <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->nama }}"
                        class="img-thumbnail gallery-image img-responsive" />
                </a>
                <div class="card-content">
                    <h4>{{ $item->nama }}</h4>
                    <p>{!! $item->text !!}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-center">
    {{ $gallery->links() }}
</div>





<style>
    .custom-card {
        height: 40vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    p,
    h3,
    h4 {
        color: black;

    }

    .card-content {
        bottom: 0;
        color: white;
        width: 100%;
        padding: 10px;
    }

    .container h1 {
        text-align: center;
    }
</style>

@endsection