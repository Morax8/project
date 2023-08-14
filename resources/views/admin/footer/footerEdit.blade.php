@extends('layout.app')
@section('title', 'Footer Edit')

@section('content')

<div class="container">
    <a href="/footercms" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('footer.update' , $footer) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="ID" value="{{ $footer->id }}">
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <img src="{{ asset('images/'.$footer->logo) }}" alt="" class="img-fluid"
                        style="display: block;  width: 10%; height: 10%;">
                    <label for="">Logo</label>
                    <input type="file" class="form-control" name="logo">
                </div>
                @error('address')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea type="text" class="form-control" name="address" rows="5">{{ $footer->address }}</textarea>
                </div>
                @error('phone')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $footer->phone }}">
                </div>
                @error('website')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">website</label>
                    <input type="text" class="form-control" name="website" value="{{ $footer->website }}">
                </div>
                @error('email')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $footer->email }}">
                </div>
                @error('about')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">About</label>
                    <textarea type="text" class="form-control" name="about"
                        rows="10">{{ $footer->about_content }}</textarea>
                </div>
                @error('maps')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Maps</label>
                    <input type="text" class="form-control" name="maps" value="{{ $footer->maps }}">
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
        setTimeout(() => 2000); //delay before redirection
    });
</script>



@endsection