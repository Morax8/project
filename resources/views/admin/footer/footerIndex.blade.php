@extends('layout.app')
@section('title', 'Footer')

@section('content')

<div class="container">
    <a href="/footer/create" class="btn btn-primary mb-3">Tambah Data</a>
    <a href="{{ route('footer.edit') }}" class="btn btn-warning mb-3">Edit Footer</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>website</th>
                    <th>Email</th>
                    <th>About</th>
                </tr>
            </thead>
            <tbody>
                @foreach($footer as $item)
                <tr>
                    <td>
                        <img src="{{ asset('images/'.$item->logo) }}" alt="" class="img-fluid"
                            style="display: block; margin: 0 auto; width: 80%; height: 80%;">
                    </td>
                    <td>{!! $item->address !!}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->web }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{!! $item->about_content !!}</td>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection