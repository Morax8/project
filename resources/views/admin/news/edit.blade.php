@extends('layout.app')
@section('title', 'News')

@section('content')

<div class="container">
    <a href="/postscms" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('postscms.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class=" form-group">
                    <input type="hidden" class="form-control" name="id" placeholder="ID" value="{{ $post->id }}">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $post->title }}">
                </div>
                @error('Excerpt')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Excerpt</label>
                    <input type="text" class="form-control" name="excerpt" placeholder="excerpt"
                        value="{{ $post->excerpt }}">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <img src="{{ asset('images/'.$post->image) }}" alt="" class="img-fluid">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('body')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Body</label>
                    <textarea id="file-picker" class="form-control" rows="20" name="body"
                        placeholder="Body">{{ $post->body }}</textarea>
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
        showSwalToast("Edit Success");

        // Submit the form after a short delay
        setTimeout(() => {
            this.submit();
        }, 1000); // delay before form submission

        // Redirect to the desired page after another short delay
        setTimeout(() => 2500); // ds delay before redirection
    });
</script>


@endsection