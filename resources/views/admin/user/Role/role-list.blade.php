@extends('layout.app')
@section('title', 'Role List')

@section('content')

<div class="container">
    <div class="table-responsive">
        <a href="/create-role" class="btn btn-primary mb-3">Add Roles</a>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ROLES</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <p></p>
                        <form action="" method="POST">
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