@extends('layout.app')
@section('title', 'PPDB')
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jurusan</th>
                    <th>Menhetahui PPDB dari mana</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ppdb as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->mengetahuippdb }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ Route('ppdb.export') }}" class="btn btn-success">Export Data</a>
    </div>
</div>
@endsection