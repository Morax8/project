@extends('layout.app')
@section('title', 'Gallery')

@section('content')

<div class="container">
    <a href="/gallery/create" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gallery as $item)
                <tr>
                    <td class="col-md-2">{{ $item->id }}</td>
                    <td class="col-md-2">{{ $item->nama }}</td>
                    <td class="col-md-8">
                        <img src="{{ asset('images/'.$item->image) }}" alt="" class="img-fluid"
                            style="display: block; margin: 0 auto; width: 80%; height: 80%;">
                    </td>
                    <td>
                        @if ($item->active)
                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-secondary">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <p></p>
                        <form action="{{ route('gallery.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>


@endsection