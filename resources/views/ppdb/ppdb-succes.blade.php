@extends('layout.main')
@section('title', 'PPDB - Succes')
@section('container')
<div class="container customcon">
    <div class="col-md-7">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Formulir Penerimaan Peserta Didik Baru TP 2023-2024</h1>
                <p><strong>Telah Berhasil Dikumpulkan</strong></p>

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