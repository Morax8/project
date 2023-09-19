@extends('layout.app')
@section('title', 'PPDB')
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jurusan</th>
                    <th>Mengetahui PPDB</th>
                    <th>Kerabat</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Domisili</th>
                    <th>RT/RW</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kota</th>
                    <th>Anak ke Berapa</th>
                    <th>Status Rumah</th>
                    <th>Nomor HP</th>
                    <th>Akun Sosial Media</th>
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>Asal Sekolah</th>
                    <th>Kota Asal Sekolah</th>
                    <th>NISN</th>
                    <th>Tanggal Lulus</th>
                    <th>Ekstrakurikuler</th>
                    <th>Nama Ayah</th>
                    <th>NIK Ayah</th>
                    <th>Nomor KK</th>
                    <th>Tempat Lahir Ayah</th>
                    <th>Tanggal Lahir Ayah</th>
                    <th>Pendidikan Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Nama Ibu</th>
                    <th>NIK Ibu</th>
                    <th>Tempat Lahir Ibu</th>
                    <th>Tanggal Lahir Ibu</th>
                    <th>Pendidikan Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Mata Pelajaran Disukai</th>
                    <th>Tinggal Kelas</th>
                    <th>Prestasi</th>
                    <th>Gambar Lingkungan</th>
                    <th>Kartu Jakarta Pintar (KJP)</th>
                    <th>Program Indonesia Pintar (PIP)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ppdb as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->mengetahuippdb }}</td>
                    <td>{{ $item->kerabat }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->jk }}</td>
                    <td>{{ $item->tmptlahir }}</td>
                    <td>{{ $item->tgllahir }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->domisili }}</td>
                    <td>{{ $item->rtrw }}</td>
                    <td>{{ $item->kelurahan }}</td>
                    <td>{{ $item->kecamatan }}</td>
                    <td>{{ $item->kota }}</td>
                    <td>{{ $item->anakbrp }}</td>
                    <td>{{ $item->statusrumah }}</td>
                    <td>{{ $item->nohp }}</td>
                    <td>{{ $item->accsosmed }}</td>
                    <td>{{ $item->tb }}</td>
                    <td>{{ $item->bb }}</td>
                    <td>{{ $item->asalsklh }}</td>
                    <td>{{ $item->kotaasalsklh }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->tgllulus }}</td>
                    <td>{{ $item->eskul }}</td>
                    <td>{{ $item->namaayah }}</td>
                    <td>{{ $item->nikayah }}</td>
                    <td>{{ $item->nokk }}</td>
                    <td>{{ $item->tmptlahirayah }}</td>
                    <td>{{ $item->tgllahirayah }}</td>
                    <td>{{ $item->pendidikanayah }}</td>
                    <td>{{ $item->pekerjaanayah }}</td>
                    <td>{{ $item->namaibu }}</td>
                    <td>{{ $item->nikibu }}</td>
                    <td>{{ $item->tmptlahiribu }}</td>
                    <td>{{ $item->tgllahiribu }}</td>
                    <td>{{ $item->pendidikanibu }}</td>
                    <td>{{ $item->pekerjaanibu }}</td>
                    <td>{{ $item->mapeldisukai }}</td>
                    <td>{{ $item->tinggalkls }}</td>
                    <td>{{ $item->prestasi }}</td>
                    <td>{{ $item->gambarlingkungan }}</td>
                    <td>{{ $item->kjp }}</td>
                    <td>{{ $item->pip }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ Route('ppdb.export') }}" class="btn btn-success">Export Data</a>
</div>

@endsection