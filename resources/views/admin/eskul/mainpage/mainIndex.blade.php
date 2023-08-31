@extends('layout.app')
@section('title', 'Ekstrakurikuler (mainpage)')
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
                    <td class="col-md-2">{{ $eskul->id }}</td>
                    <td class="col-md-2">{{ $eskul->title }}</td>
                    <td class="col-md-8">{!! $eskul->content !!}</td>
                    <td>
                        <a href="{{ route('eskul.edit', $eskul->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection