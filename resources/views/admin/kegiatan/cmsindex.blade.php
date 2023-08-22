@extends('layout.app')
@section('title', 'Kegiatan')

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
                <tr>
                    <td class="col-md-2">{{ $kegiatan->id }}</td>
                    <td class="col-md-2">{{ $kegiatan->title }}</td>
                    <td class="col-md-8">{!! $kegiatan->content !!}</td>
                    <td>
                        {{-- <a href="{{ route('kegiatan.edit') }}" class="btn btn-warning">Edit</a> --}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
