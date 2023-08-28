@extends('layout.main')
@section('title', 'Ekstrakurikuler')
@section('container')

<div class="container">
    <header>
        <h1>Ekstrakurikuler</h1>
    </header>
    <p>Kegiatan ekstrakurikuler ini bertujuan untuk mengembangkan bakat yang dimiliki masing-masing siswa, siswa
        dibebaskan dalam memilih program ekstrakurikuler yang diminati sesuai dengan kesenangan dan keinginan
        mereka. Berikut daftar ekstrakurikulernya:</p>
    <ul>
        <li><strong><a href="/band">Band</a></strong></li>
        <li><strong><a href="/badmin">Badminton</a></strong></li>
        <li><strong><a href="/padus">Paduan Suara</a></strong></li>
        <li><strong><a href="tenismeja">Tenis Meja</a></strong></li>
        <li><strong><a href="/futsal">Futsal</a></strong>
            <p><img decoding="async" class="alignnone size-medium wp-image-811"
                    src="https://www.stmstrada.sch.id/wp-content/uploads/2022/04/IMG_5527-300x225.jpg" alt=""
                    width="300" height="225" sizes="(max-width: 300px) 100vw, 300px" />&nbsp; &nbsp; <img
                    decoding="async" loading="lazy" class="alignnone size-medium wp-image-815"
                    src="https://www.stmstrada.sch.id/wp-content/uploads/2022/04/IMG_5539-300x225.jpg" alt=""
                    width="300" height="225" sizes="(max-width: 300px) 100vw, 300px" /></p>
        </li>
        <li><strong><a href="/paskib">Paskibra</a></strong></li>
        <p><img decoding="async" loading="lazy" class="alignnone  wp-image-809"
                src="https://www.stmstrada.sch.id/wp-content/uploads/2022/04/DSC_0560-300x177.jpg" alt="" width="298"
                height="176" sizes="(max-width: 298px) 100vw, 298px" /> <img decoding="async" loading="lazy"
                class="alignnone  wp-image-810"
                src="https://www.stmstrada.sch.id/wp-content/uploads/2022/04/DSC_0553-300x199.jpg" alt="" width="267"
                height="177" sizes="(max-width: 267px) 100vw, 267px" /></p>
        <li><strong><a href="/pramuka">Pramuka</a></strong></li>
        <p><img decoding="async" loading="lazy" class="alignnone  wp-image-813"
                src="https://www.stmstrada.sch.id/wp-content/uploads/2022/04/MG_0068-200x300.jpg" alt="" width="157"
                height="236" sizes="(max-width: 157px) 100vw, 157px" />&nbsp; <img decoding="async" loading="lazy"
                class="alignnone  wp-image-814"
                src="https://www.stmstrada.sch.id/wp-content/uploads/2022/04/MG_5592-300x136.jpg" alt="" width="513"
                height="232" sizes="(max-width: 513px) 100vw, 513px" /></p>
    </ul>
</div>



<style>
    p,
    li,
    ul {
        font-size: 20px;
    }
</style>

@endsection