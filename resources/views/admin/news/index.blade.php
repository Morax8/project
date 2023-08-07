@extends('layout.app')
@section('title', 'News')

@section('content')

<div class="container">
    <a href="/postscms/create" class="btn btn-primary mb-3">Tambah Berita</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Excerpt</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td class="col-md-2">{{ $post->id }}</td>
                    <td class="col-md-2">{{ $post->title }}</td>
                    <td class="col-md-2">{{ $post->excerpt }}</td>
                    <td class="col-md-6">{{ $post->body }}</td>
                    <td>
                        <a href="{{ route('postscms.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                        <p></p>
                        <form action="{{ route('postscms.destroy', $post->id) }}" method="POST">
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