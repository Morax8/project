@extends('layout.main')
@section('title', 'PPDB')
@section('container')

<div class="container customcon">
    <form action="{{ route('ppdb.store') }}" method="POST" class="customform">
        @csrf
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>Formulir Penerimaan Peserta Didik Baru TP 2023-2024</h1>
                    <p>Mohon disiapkan berkas ini demi kelancaran pengisian Formulir PPDB</p>
                    <ol>
                        <li> Akta Lahir</li>
                        <li>Kartu Keluarga</li>
                        <li>Nomor Induk Siswa Nasional (NISN)</li>
                    </ol>
                </div>
                <ul class="list-group list-group-flush bg-dark">
                    <li class="list-group-item " style="color: red;">* Menunjukkan pertanyaan yang wajib diisi</li>
                </ul>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Jurusan yang akan dipilih <span style="color: red">*</span></h3>
                    <select name="jurusan" id="jurusan">
                        <option>Pilih</option>
                        <option value="Teknik Informatika Pemrograman">Teknik Informatika Pemrograman</option>
                        <option value="Teknik Mekatronika">Teknik Mekatronika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Bisnis dan Sepeda Motor">Teknik Bisnis dan Sepeda Motor</option>
                    </select>
                    @error('jurusan')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Mengetahui PPDB SMK Strada dari mana <span
                            style="color: red">*</span>
                    </h3>
                    <div class="radio-group">
                        <label class="radio">
                            <input type="radio" name="mengetahuippdb" value="web">
                            <span class="radio-custom"></span>
                            Web SMK Strada
                        </label>
                        <label class="radio">
                            <input type="radio" name="mengetahuippdb" value="medsos">
                            <span class="radio-custom"></span>
                            Media Sosial
                        </label>
                        <label class="radio">
                            <input type="radio" name="mengetahuippdb" value="brosur">
                            <span class="radio-custom"></span>
                            Brosur
                        </label>
                        <label class="radio">
                            <input type="radio" name="mengetahuippdb" value="teman">
                            <span class="radio-custom"></span>
                            Teman / Kerabat
                        </label>
                    </div>
                    @error('mengetahuippdb')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Jika dari Teman/Kerabat adalah Siswa SMK Strada sebutkan nama dan
                        kelas
                        (Cth : Josua Natanael, Kelas : XI TM 2) <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="kerabat" id="kerabat" placeholder="Your answer here">
                    </div>
                    @error('kerabat')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Nama Lengkap (Sesuai dengan Akta Lahir) tulis hurup Kapital (Cth :
                        JOSUA NATANAEL) <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="nama" id="nama" placeholder="Your answer here">
                    </div>
                    @error('nama')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">NIK (Nomor Identitas Kependudukan) <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="nik" id="nik" placeholder="Your answer here">
                    </div>
                    @error('nik')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Jenis Kelamin <span style="color: red">*</span>
                    </h3>
                    <div class="radio-group">
                        <label class="radio">
                            <input type="radio" name="jk" value="Laki - Laki">
                            <span class="radio-custom"></span>
                            Laki - Laki
                        </label>
                        <label class="radio">
                            <input type="radio" name="jk" value="perempuan">
                            <span class="radio-custom"></span>
                            Perempuan
                        </label>
                    </div>
                    @error('jk')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tempat Lahir <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="tmptlahir" placeholder="Your answer here">
                    </div>
                    @error('tmptlahir')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tanggal Lahir <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="date" name="tgllahir" id="tgllahir">
                    </div>
                    @error('tgllahir')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Agama <span style="color: red">*</span>
                    </h3>
                    <div class="radio-group">
                        <label class="radio">
                            <input type="radio" name="agama" value="Katolik">
                            <span class="radio-custom"></span>
                            Katolik
                        </label>
                        <label class="radio">
                            <input type="radio" name="agama" value="Islam">
                            <span class="radio-custom"></span>
                            Islam
                        </label>
                        <label class="radio">
                            <input type="radio" name="agama" value="Kristen Protestan">
                            <span class="radio-custom"></span>
                            Kristen Protestan
                        </label>
                        <label class="radio">
                            <input type="radio" name="agama" value="option3">
                            <span class="radio-custom"></span>
                            Buddha
                        </label>
                        <label class="radio">
                            <input type="radio" name="agama" value="option3">
                            <span class="radio-custom"></span>
                            Hindu
                        </label>
                        <label class="radio">
                            <input type="radio" name="agama" value="option3">
                            <span class="radio-custom"></span>
                            Konghucu
                        </label>
                        <label class="radio">
                            <input type="radio" name="agama" value="option3">
                            <span class="radio-custom"></span>
                            Lain - Lain
                        </label>
                    </div>
                    @error('agama')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Alamat Domisili (isikan dengan Jalan cth : Jln. Pademangan 10)
                        <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="domisili" id="domisili" placeholder="Your answer here">
                    </div>
                    @error('domisili')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">RT/RW <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="rtrw" id="rtrw" placeholder="Your answer here">
                    </div>
                    @error('rtrw')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Kelurahan <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="kelurahan" id="kelurahan" placeholder="Your answer here">
                    </div>
                    @error('kelurahan')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Kecamatan <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="kecamatan" id="kecamatan" placeholder="Your answer here">
                    </div>
                    @error('kecamatan')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Kota (Jika tinggal di Kabupaten tulis kabupaten cth : Kab. Bekasi)
                        <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="kota" id="kota" placeholder="Your answer here">
                    </div>
                    @error('kota')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Anak ke berapa dari berapa bersaudara (cth : Anak ke 3 dari 4
                        bersaudara)
                        <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="anakbrp" id="anakbrp" placeholder="Your answer here">
                    </div>
                    @error('anakbrp')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Status Rumah <span style="color: red">*</span>
                    </h3>
                    <div class="radio-group">
                        <label class="radio">
                            <input type="radio" name="statusrumah" value="Milik sendiri">
                            <span class="radio-custom"></span>
                            Milik sendiri
                        </label>
                        <label class="radio">
                            <input type="radio" name="statusrumah" value="Sewa">
                            <span class="radio-custom"></span>
                            Sewa
                        </label>
                    </div>
                    @error('statusrumah')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">No HP <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="nohp" id="nohp" placeholder="Your answer here">
                    </div>
                    @error('nohp')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Account Media Sosial <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="accsosmed" id="accsosmed" placeholder="Your answer here">
                    </div>
                    @error('accsosmed')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tinggi Badan <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tb" id="tb" placeholder="Your answer here">
                    </div>
                    @error('tb')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Berat Badan <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="bb" id="bb" placeholder="Your answer here">
                    </div>
                    @error('bb')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Asal SMP/MTs (dibuat lengkap cth : SMP Negeri 34 Jakarta)
                        <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="asalsklh" id="asalsklh" placeholder="Your answer here">
                    </div>
                    @error('asalsklh')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Kota Asal SMP/MTs <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="kotaasalsklh" id="kotaasalsklh" placeholder="Your answer here">
                    </div>
                    @error('kotaasalsklh')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Nomor Induk Siswa Nasional (NISN)
                        <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="nisn" id="nisn" placeholder="Your answer here">
                    </div>
                    @error('nisn')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tanggal Lulus dan No. Ijasah (Jika belum ada silahkan isi tanda
                        penghubung (-)) <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tgllulus" id="tgllulus" placeholder="Your answer here">
                    </div>
                    @error('tgllulus')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Eskul yang diikuti di SMP/MTs <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="eskul" id="eskul" placeholder="Your answer here">
                    </div>
                    @error('eskul')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Nama Ayah (Isi dengan hurup kapital cth : SUMARTONO)
                        <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="namaayah" id="namaayah" placeholder="Your answer here">
                    </div>
                    @error('namaayah')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">NIK Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="nikayah" id="nikayah" placeholder="Your answer here">
                    </div>
                    @error('nikayah')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">No. KK <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="nokk" id="nokk" placeholder="Your answer here">
                    </div>
                    @error('nokk')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tempat Lahir Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahirayah" id="tmptlahirayah" placeholder="Your answer here">
                    </div>
                    @error('tmptlahirayah')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tanggal Lahir Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="date" name="tgllahirayah" id="tgllahirayah">
                    </div>
                    @error('tgllahirayah')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Pendidikan Terakhir Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="pendidikanayah" id="pendidikanayah" placeholder="Your answer here">
                    </div>
                    @error('pendidikanayah')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Pekerjaan Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="pekerjaanayah" id="pekerjaanayah" placeholder="Your answer here">
                    </div>
                    @error('pekerjaanayah')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Nama Ibu Kandung (Diisi dengan kapital cth : SUMARSIH)
                        <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="namaibu" id="namaibu" placeholder="Your answer here">
                    </div>
                    @error('namaibu')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">NIK ibu kandung <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="nikibu" id="nikibu" placeholder="Your answer here">
                    </div>
                    @error('nikibu')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tempat lahir ibu <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahiribu" id="tmptlahiribu" placeholder="Your answer here">
                    </div>
                    @error('tmptlahiribu')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tanggal Lahir Ibu <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="date" name="tgllahiribu" id="tgllahiribu">
                    </div>
                    @error('tgllahiribu')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Pendidikan terakhir ibu <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="pendidikanibu" id="pendidikanibu" placeholder="Your answer here">
                    </div>
                    @error('pendidikanibu')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Pekerjaan ibu <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="pekerjaanibu" id="pekerjaanibu" placeholder="Your answer here">
                    </div>
                    @error('pekerjaanibu')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Mata Pelajaran yang di sukai <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="mapeldisukai" id="mapeldisukai" placeholder="Your answer here">
                    </div>
                    @error('mapeldisukai')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Pernah tinggal kelas di SMP/SD (Jika ya sebutkan kelas berapa)
                        <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="tinggalkls" id="tinggalkls" placeholder="Your answer here">
                    </div>
                    @error('tinggalkls')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Prestasi yang pernah diraih waktu di SMP/SD
                        <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="prestasi" id="prestasi" placeholder="Your answer here">
                    </div>
                    @error('prestasi')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Gambaran lingkungan tempat tinggal <span style="color: red">*</span>
                    </h3>
                    <div class="radio-group">
                        <label class="radio">
                            <input type="radio" name="gambarlingkungan" value="Padat dan sempit">
                            <span class="radio-custom"></span>
                            Padat dan sempit
                        </label>
                        <label class="radio">
                            <input type="radio" name="gambarlingkungan" value="Pemukiman biasa">
                            <span class="radio-custom"></span>
                            Pemukiman biasa
                        </label>
                        <label class="radio">
                            <input type="radio" name="gambarlingkungan" value="Perumahan">
                            <span class="radio-custom"></span>
                            Perumahan
                        </label>
                        <label class="radio">
                            <input type="radio" name="gambarlingkungan" value="Ruko">
                            <span class="radio-custom"></span>
                            Ruko
                        </label>
                        <label class="radio">
                            <input type="radio" name="gambarlingkungan" value="Apartment">
                            <span class="radio-custom"></span>
                            Apartment
                        </label>
                        <label class="radio">
                            <input type="radio" name="gambarlingkungan" value="Rusun">
                            <span class="radio-custom"></span>
                            Rusun
                        </label>
                    </div>
                    @error('gambarlingkungan')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Apakah Penerima KJP <span style="color: red">*</span></h3>
                    <select name="kjp" id="kjp">
                        <option>Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    @error('kjp')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Apakah Penerima PIP <span style="color: red">*</span></h3>
                    <select name="pip" id="pip">
                        <option>Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    @error('pip')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="clearfix">
                <button type="submit" class="btn btn-primary Create">Submit</button>
                <button type="button" id="clearForm" class="btn btn-danger pull-right">Clear Form</button>
            </div>
        </div>
    </form>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get a reference to the clear button and the form
        const clearButton = document.getElementById("clearForm");
        const form = document.querySelector("form");

        // Add a click event listener to the clear button
        clearButton.addEventListener("click", function () {
            // Reset the form to its initial state
            form.reset();
        });
    });
</script>
<style>
    body {
        background-color: #f5f5f5;
    }

    .customform {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    h1 {
        color: black;
        font-size: 30px;
    }

    button[type="submit"] {
        width: 40%;
    }

    p,
    li,
    ol {
        font-size: 18px;
    }

    option,
    select {
        font-size: 15px;
    }

    .panel-body {
        /* border: 1px solid black; */
        padding: 20px 20px 20px 20px;
    }

    select {
        width: 40%;
        height: 40px;
        border-radius: 5px;
        border: 1px solid black;
    }

    /* Reset default radio button styles */
    .radio input[type="radio"] {
        display: none;
    }

    /* Radio button container */
    .radio {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        cursor: pointer;
    }

    /* Custom radio button */
    .radio-custom {
        width: 20px;
        height: 20px;
        border: 2px solid black;
        border-radius: 50%;
        margin-right: 10px;
        position: relative;
    }

    /* Checked state for custom radio button */
    .radio input[type="radio"]:checked+.radio-custom::after {
        content: "";
        width: 10px;
        height: 10px;
        background: black;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: block;
    }

    /* Label styles */
    .radio label {
        font-size: 16px;
        color: #333;
        user-select: none;
    }

    /* Hover effect */
    .radio:hover .radio-custom {
        border-color: #0a3d89;
    }

    /* FOR INPUT TYPE TEXT */
    /* Reset default input styles */
    .input-container input[type="text"] {
        border: none;
        outline: none;
        background-color: transparent;
        font-size: 16px;
        width: 100%;
        padding: 0;
        margin: 0;
        border-bottom: 2px solid transparent;
        transition: border-color 0.3s ease-in-out;
    }

    /* Style the input when it's focused */
    .input-container input[type="text"] {
        border-color: #ccc;
        transition: border-color 0.3s ease-in-out;
        /* Add a transition for the border color */
    }

    .input-container input[type="text"]:focus {
        border-color: #0e459d;
        transition: border-color 0.3s ease-in-out;
        /* Add a transition for the border color */
    }

    /* Style the placeholder text */
    .input-container input[type="text"]::placeholder {
        color: #999;
    }

    /* Add an underline effect for the placeholder text */
    .input-container input[type="text"]::-webkit-input-placeholder {
        border-bottom: 1px solid #ccc;
        padding-bottom: 4px;
    }

    .input-container input[type="text"]::-moz-placeholder {
        border-bottom: 1px solid #ccc;
        padding-bottom: 4px;
    }

    .input-container input[type="text"]:-ms-input-placeholder {
        border-bottom: 1px solid #ccc;
        padding-bottom: 4px;
    }

    .input-container input[type="text"]:-moz-placeholder {
        border-bottom: 1px solid #ccc;
        padding-bottom: 4px;
    }

    /* FOR INPUT TYPE DATE */
    /* Reset default input styles */
    .input-container input[type="date"] {
        border: none;
        outline: none;
        background-color: transparent;
        font-size: 16px;
        width: 25%;
        padding: 0;
        margin: 0;
        border-bottom: 2px solid transparent;
        transition: border-color 0.3s ease-in-out;
    }

    /* Style the input when it's focused */
    .input-container input[type="date"] {
        border-color: #ccc;
        transition: border-color 0.3s ease-in-out;
    }

    .input-container input[type="date"]:focus {
        border-color: #0e459d;
        transition: border-color 0.3s ease-in-out;
    }

    /* Style the placeholder text */
    .input-container input[type="date"]::placeholder {
        color: #999;
    }

    /* Add an underline effect for the placeholder text */
    .input-container input[type="date"]::-webkit-input-placeholder {
        border-bottom: 1px solid #ccc;
        padding-bottom: 4px;
    }

    .input-container input[type="date"]::-moz-placeholder {
        border-bottom: 1px solid #ccc;
        padding-bottom: 4px;
    }

    .input-container input[type="date"]:-ms-input-placeholder {
        border-bottom: 1px solid #ccc;
        padding-bottom: 4px;
    }

    .input-container input[type="date"]:-moz-placeholder {
        border-bottom: 1px solid #ccc;
        padding-bottom: 4px;
    }
</style>

@endsection