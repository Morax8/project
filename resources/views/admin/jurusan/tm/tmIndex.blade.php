@extends('layout.app')
@section('title', 'TSM')

@section('content')

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Isi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tmjurusan as $item)
                <tr>
                    <td class="col-md-2">{{ $item->id }}</td>
                    <td class="col-md-2">{{ $item->title }}</td>
                    <td class="col-md-8">{!! $item->content !!}</td>
                    <td>
                        <a href="{{ route('tm.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="d-flex justify-content-center">
    <figure class="aligncenter size-large">
        <img decoding="async" width="600" height="448"
            src="https://www.stmstrada.sch.id/wp-content/uploads/2021/05/WhatsApp-Image-2021-05-24-at-11.46.42-600x448.jpeg"
            alt="" class="wp-image-691" />
    </figure>
</div>

@endsection