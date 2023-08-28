@extends(' layout.app')
@section('title', 'Logo Edit')

@section('content')

<div class="container">
    <a href="/logocms" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('profile.update', ['type' => 'logo', 'id' => $logoprof->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="{{ $logoprof->id }}">
                </div>
                <div class="form-group">
                    <label for="">title</label>
                    <input type="text" class="form-control" name="title" placeholder="title"
                        value="{{ $logoprof->title }}">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea class="form-control" rows="30" name="content"
                        placeholder="Content">{{ $logoprof->content }}</textarea>
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
        }, 2000); // delay before redirection
    });
</script>
@endsection