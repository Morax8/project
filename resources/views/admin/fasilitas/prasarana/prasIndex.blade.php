@extends('layout.app')
@section('title', 'Prasarana')

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
                @foreach ($prasarana as $item)
                <tr>
                    <td class="col-md-2">{{ $item->id }}</td>
                    <td class="col-md-2">{{ $item->title }}</td>
                    <td class="col-md-8">{!! $item->content !!}</td>
                    <td>
                        <a href="{{ route('pras.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection