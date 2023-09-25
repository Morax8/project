@extends('layout.main')
@section('title', 'Contact Succes')
@section('container')
<div class="container customcon">
    <div class="col-md-7">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Form Contact</h1>
                <p><strong>Telah Berhasil Dikirim</strong></p>

            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="clearfix">
            <button class="btn btn-primary Create" onclick="window.location.href = '/';">Kembali Ke Halaman
                Utama</button>
        </div>
    </div>
</div>
<style>
    body {
        background-color: #f5f5f5;
    }
</style>
@endsection