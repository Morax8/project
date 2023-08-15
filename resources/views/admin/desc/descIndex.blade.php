@extends('layout.app')
@section('title', 'CMS Index')

@section('content')

<div class="container">
    <a href="/desc/edit/" class="btn btn-warning mb-3">Edit</a>
    <div class="row">
        @foreach($desc as $item)
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h3>Header (di atas carousel) :</h3>
                    <h5>{{ $item->header1 }}</h5>
                    <h6>{{ $item->header2 }}</h6>
                </div>
                <div class="card-header">
                    <h3>Intro :</h3>
                    <h5 class="title-section">
                        <span class="title-regular">{{ $item->descspan }} <strong>{{ $item->descstrong
                                }}</strong></span><br />
                        {{ $item->desch1 }}
                    </h5>
                    <p>{!! $item->desc !!}</p>
                </div>
                <div class="card-header">
                    <h3>Statistik : </h3>
                    <p><strong>{{ $item->jmljurusan }}</strong> {{ $item->jurusan }}</p>
                    <p>{!! $item->descjurusan !!}</p>
                    <p><strong>{{ $item->jmlsiswa }}</strong> {{ $item->siswa }}</p>
                    <p>{!! $item->descsiswa !!}</p>
                    <p><strong>{{ $item->jmlguru }}</strong> {{ $item->guru }}</p>
                    <p>{!! $item->descguru !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection