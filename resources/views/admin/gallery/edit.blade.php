@extends('layout.app')
@section('title', 'gallerys')

@section('content')

<div class="container">
    <a href="#" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('gallery.update' , ['type' => $item->type, 'id' => $item->id]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" placeholder="ID" value="{{ $item->id }}">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $item->nama }}">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <img src="{{ asset('images/'.$item->image) }}" alt="" class="img-fluid">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="gambar">
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
                    <label for="">Text</label>
                    <textarea name="text" id="" cols="30" rows="10">{{ $item->text }}</textarea>
                </div>
                <div class="form-group">
                    <label for="active">Image Status</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="active" id="active" {{ $item->active ?
                        'checked' : '' }}>
                        <label class="form-check-label" for="active">Active</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block Edit">Submit</button>
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
        }, 1000); //delay before form submission

        // Redirect to the desired page after another short delay
        setTimeout(() => {
        }, 2000); //delay before redirection
    });
</script>



@endsection