@extends('layout.app')
@section('title', 'Sliders')

@section('content')

<div class="container">
    <a href="/sliders/create" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $slider)
                <tr>
                    <td class="col-md-2">{{ $slider->id }}</td>
                    <td class="col-md-2">{{ $slider->nama }}</td>
                    <td class="col-md-8">
                        <img src="{{ asset('images/'.$slider->image) }}" alt="" class="img-fluid"
                            style="display: block; margin: 0 auto; width: 80%; height: 80%;">
                    </td>
                    <td>
                        @if ($slider->active)
                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-secondary">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                        <p></p>
                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
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