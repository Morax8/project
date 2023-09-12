@extends('layout.main')
@section('title', 'Sarana & Prasarana')
@section('container')

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

        <th>Nama</th>
        <th>Foto</th>
        <th>Deskripsi</th>
        <th>Kondisi</th>
        @foreach ($sarpra as $item)
        <tr>
            <td class="col-md-1">{{ $item->title }}</td>
            <td class="col-md-4"><img src="{{ asset('images/'.$item->image) }}" alt="" style="width: 500px">
            </td>
            <td class="col-md-5">{!! $item->content !!}</td>
            <td class="col-md-1">{{ $item->kondisi }}</td>

        </tr>
        @endforeach
    </table>
</div>


<style>
    table {
        margin: 1.5vh 1.5vh 1.5vh 1.5vh;
    }

    li,
    p,
    ul {
        font-size: 15px;
    }
</style>
@endsection

{{--
<figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="600" height="400"
        src="https://www.stmstrada.sch.id/wp-content/uploads/2021/05/MG_2383.jpg" alt="" class="wp-image-297"
        sizes="(max-width: 600px) 100vw, 600px" />
    <figcaption>Bengkel Teknik Pemesinan</figcaption>
</figure>
<figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="600" height="450"
        src="https://www.stmstrada.sch.id/wp-content/uploads/2021/05/WhatsApp-Image-2021-05-13-at-09.01.56.jpeg" alt=""
        class="wp-image-298"
        srcset="https://www.stmstrada.sch.id/wp-content/uploads/2021/05/WhatsApp-Image-2021-05-13-at-09.01.56.jpeg 600w, https://www.stmstrada.sch.id/wp-content/uploads/2021/05/WhatsApp-Image-2021-05-13-at-09.01.56-300x225.jpeg 300w, https://www.stmstrada.sch.id/wp-content/uploads/2021/05/WhatsApp-Image-2021-05-13-at-09.01.56-150x113.jpeg 150w"
        sizes="(max-width: 600px) 100vw, 600px" />
    <figcaption>Laboratorium Teknik Informatika Pemrograman</figcaption>
</figure> --}}