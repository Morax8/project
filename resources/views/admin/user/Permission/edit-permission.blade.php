@extends('layout.app')
@section('title', 'Edit Permission')

@section('content')

<div class="container">
    <a href="{{ route('permission.show') }}" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-7">
            <form action="{{ route('permission.update',  $permission->id) }}" method="post">
                @csrf
                @method('PUT')
                <h2>Roles</h2>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group col-md-4">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $permission->name }}">
                </div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-primary btn-block Create">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Roles</h2>
            <div>
                @if ($permission->roles)
                <p>Roles that have <strong>{{ $permission->name }}</strong> permissions :</p>
                <ul>
                    @foreach ($permission->roles as $permission_role)
                    <li>
                        {{ $permission_role->name }}
                        <form
                            action="{{ route('revokePermission', ['role' => $permission_role->id, 'permission' => $permission->id]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Revoke Permission</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
                @else
                <p>This permission is not assigned to any roles.</p>
                @endif
            </div>
            <div>
                <form action="{{ route('assignPermission', ['permission' => $permission->id]) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <select name="role" id="role">
                            @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary btn-block Create">Assign</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<style>
    option,
    select {
        font-size: 15px;
    }

    select {
        width: 40%;
        height: 40px;
        border-radius: 5px;
        border: 1px solid black;
    }
</style>
<script>
    // Function to display the Swal toast message
    function showSwalToast(message) {
        Swal.fire({
            toast: true,
            icon: "success",
            title: message,
            animation: true,
            position: "top-right",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });
    }

    // Add event listener to the form submit button
    document.querySelector("form").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        // Show the Swal toast message
        showSwalToast("Create Success");

        // Submit the form after a short delay
        setTimeout(() => {
            this.submit();
        }, 2000); // 2 seconds delay before form submission

        // Redirect to the desired page after another short delay
        setTimeout(() =>  2000);
    });
</script>

@endsection