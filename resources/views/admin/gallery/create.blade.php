@extends('layout.app')
@section('title', 'Create new Gallery')

@section('content')

<div class="container">
    <a href="/gallery/type/{type}" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" placeholder="ID">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="nama" placeholder="Judul">
                </div>
                @error('gambar')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="tip">TIP</option>
                        <option value="tm">TM</option>
                        <option value="tsm">TSM</option>
                        <option value="tp">TP</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">text</label>
                    <textarea class="form-control" rows="20" name="text" placeholder="text"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block Create">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
            timer: 3000,
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
        setTimeout(() => {
            window.location.href = "{{ route('sliders.index') }}";
        }, 3000); // 5 seconds delay before redirection
    });
</script>

@endsection