@extends('layout.app')
@section('title', 'Permission')

@section('content')

<div class="container">
    <div class="table-responsive">
        <a href="create-permission" class="btn btn-primary mb-3">Add Permissions</a>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ROLES</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
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