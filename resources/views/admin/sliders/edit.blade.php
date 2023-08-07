@extends('layout.app')
@section('title', 'Sliders')

@section('content')

<div class="container">
    <a href="/sliders" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('sliders.update' , $slider->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="ID" value="{{ $slider->id }}">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $slider->nama }}">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <img src="{{ asset('images/'.$slider->image) }}" alt="" class="img-fluid">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="active">Image Status</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="active" id="active" {{ $slider->active ?
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
            window.location.href = "{{ route('sliders.index') }}";
        }, 2000); //delay before redirection
    });
</script>



@endsection