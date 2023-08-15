@extends('layout.app')
@section('title', 'Edit Desc')
@section('content')

<div class="container">
    <h1>Edit Description</h1>
    <form action="{{ route('desc.update') }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Header 1</label>
            <input type="text" class="form-control" id="header1" name="header1" value="{{ $desc->header1 }}" required>
        </div>
        <div class="form-group">
            <label for="">Header 2</label>
            <input type="text" class="form-control" id="header2" name="header2" value="{{ $desc->header2 }}" required>
        </div>
        <div class="form-group">
            <label for="">Desc (Span)</label>
            <input type="text" class="form-control" id="descspan" name="descspan" value="{{ $desc->descspan }}"
                required>
        </div>
        <div class="form-group">
            <label for="">Desc (Strong)</label>
            <input type="text" class="form-control" id="descstrong" name="descstrong" value="{{ $desc->descstrong }}"
                required>
        </div>
        <div class="form-group">
            <label for="">Desc (H1)</label>
            <input type="text" class="form-control" id="desch1" name="desch1" value="{{ $desc->desch1 }}" required>
        </div>
        <div class="form-group">
            <label for="">Desc</label>
            <textarea type="text" class="form-control" id="desc" name="desc" required>{{ $desc->desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Jumlah Jurusan</label>
            <input type="text" class="form-control" id="jmljurusan" name="jmljurusan" value="{{ $desc->jmljurusan }}"
                required>
        </div>
        <div class="form-group">
            <label for="">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $desc->jurusan }}" required>
        </div>
        <div class="form-group">
            <label for="">Desc Jurusan</label>
            <textarea type="text" class="form-control" id="descjurusan" name="descjurusan"
                required>{{ $desc->descjurusan }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Jumlah Siswa</label>
            <input type="text" class="form-control" id="jmlsiswa" name="jmlsiswa" value="{{ $desc->jmlsiswa }}"
                required>
        </div>
        <div class="form-group">
            <label for="">Siswa</label>
            <input type="text" class="form-control" id="siswa" name="siswa" value="{{ $desc->siswa }}" required>
        </div>
        <div class="form-group">
            <label for="">Desc Siswa</label>
            <textarea type="text" class="form-control" id="descsiswa" name="descsiswa"
                required>{{ $desc->descsiswa }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Jumlah Guru</label>
            <input type="text" class="form-control" id="jmlguru" name="jmlguru" value="{{ $desc->jmlguru }}" required>
        </div>
        <div class="form-group">
            <label for="">Guru/Staff</label>
            <input type="text" class="form-control" id="guru" name="guru" value="{{ $desc->guru }}" required>
        </div>
        <div class="form-group">
            <label for="">Desc Guru</label>
            <textarea type="text" class="form-control" id="descguru" name="descguru"
                required>{{ $desc->descguru }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Description</button>
    </form>
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
        }, 2000); // delay before form submission

        // Redirect to the desired page after another short delay
        setTimeout(() => 2500); // ds delay before redirection
    });
</script>
@endsection