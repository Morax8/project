@extends('layout.app')
@section('title', 'Edit Roles')

@section('content')

<div class="container">
    <a href="/role-show" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-7">
            <form action="{{ route('role.update', ['id' => $role->id]) }}" method="post">
                @csrf
                @method('PUT')
                <h2>Roles</h2>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group col-md-4">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $role->name }}">
                </div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-primary btn-block Create">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Role Permissions</h2>
            <div class="mt-4 p-2">
                @if ($role->permissions->isNotEmpty())
                <p>Permissions for <strong>{{ $role->name }}</strong>:</p>
                <ul>
                    @foreach ($role->permissions as $role_permission)
                    <li>{{ $role_permission->name }}</li>
                    @endforeach
                </ul>
                @else
                <p>This role currently has no permissions.</p>
                @endif

            </div>
            <div>
                <form action="{{ route('givePermission', ['id' => $role->id, 'role' => $role->id]) }}" method="post">
                    @csrf
                    @error('nama')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <select name="permission" id="permission">
                            @foreach ($permissions as $permission)
                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
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