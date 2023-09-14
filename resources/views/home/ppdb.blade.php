@extends('layout.main')
@section('title', 'PPDB')
@section('container')

<div class="container customcon">
    <form action="">
        <div class="col-md-7">
            <div class="panel panel-default">
                {{-- <div class="panel-body">
                    <h3>Formulir Penerimaan Peserta Didik Baru TP 2023-2024</h3>
                    <p>With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Button</a>
                </div> --}}
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
                    <select name="jurusan" id="">
                        <option>Pilih</option>
                        <option value="Teknik Informatika Pemrograman">Teknik Informatika Pemrograman</option>
                        <option value="Teknik Mekatronika">Teknik Mekatronika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Bisnis dan Sepeda Motor">Teknik Bisnis dan Sepeda Motor</option>
                    </select>
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
                            <input type="radio" name="web" value="web">
                            <span class="radio-custom"></span>
                            Web SMK Strada
                        </label>
                        <label class="radio">
                            <input type="radio" name="medsos" value="medsos">
                            <span class="radio-custom"></span>
                            Media Sosial
                        </label>
                        <label class="radio">
                            <input type="radio" name="brosur" value="brosur">
                            <span class="radio-custom"></span>
                            Brosur
                        </label>
                        <label class="radio">
                            <input type="radio" name="teman" value="teman">
                            <span class="radio-custom"></span>
                            Teman / Kerabat
                        </label>
                    </div>
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
                        <input type="text" name="namateman" id="text-input" placeholder="Your answer here">
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">NIK (Nomor Identitas Kependudukan) <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="nik" id="text-input" placeholder="Your answer here">
                    </div>

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
                            <input type="radio" name="laki" value="Laki - Laki">
                            <span class="radio-custom"></span>
                            Laki - Laki
                        </label>
                        <label class="radio">
                            <input type="radio" name="perempuan" value="perempuan">
                            <span class="radio-custom"></span>
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tempat Lahir <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tanggal Lahir <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="date" name="tgllahir" id="text-input">
                    </div>
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
                            <input type="radio" name="option" value="option1">
                            <span class="radio-custom"></span>
                            Katolik
                        </label>
                        <label class="radio">
                            <input type="radio" name="option" value="option2">
                            <span class="radio-custom"></span>
                            Islam
                        </label>
                        <label class="radio">
                            <input type="radio" name="option" value="option3">
                            <span class="radio-custom"></span>
                            Kristen Protestan
                        </label>
                        <label class="radio">
                            <input type="radio" name="option" value="option3">
                            <span class="radio-custom"></span>
                            Buddha
                        </label>
                        <label class="radio">
                            <input type="radio" name="option" value="option3">
                            <span class="radio-custom"></span>
                            Hindu
                        </label>
                        <label class="radio">
                            <input type="radio" name="option" value="option3">
                            <span class="radio-custom"></span>
                            Konghucu
                        </label>
                        <label class="radio">
                            <input type="radio" name="option" value="option3">
                            <span class="radio-custom"></span>
                            Lain - Lain
                        </label>
                    </div>
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
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">RT/RW <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Kelurahan <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Kecamatan <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
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
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
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
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
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
                            <input type="radio" name="laki" value="Laki - Laki">
                            <span class="radio-custom"></span>
                            Milik sendiri
                        </label>
                        <label class="radio">
                            <input type="radio" name="perempuan" value="perempuan">
                            <span class="radio-custom"></span>
                            Sewa
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">No HP <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Account Media Sosial <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tinggi Badan <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Berat Badan <span style="color: red">*</span>
                    </h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
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
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Kota Asal SMP/MTs <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
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
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tanggal Lulus dan No. Ijasah (Jika belum ada silahkan isi tanda
                        penghubung (-)) <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Eskul yang diikuti di SMP/MTs <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
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
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">NIK Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">No. KK <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tempat Lahir Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tanggal Lahir Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="date" name="tgllahir" id="text-input">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tempat Lahir Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tempat Lahir Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tempat Lahir Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 style="margin-bottom: 3vh">Tempat Lahir Ayah <span style="color: red">*</span></h3>
                    <div class="input-container">
                        <input type="text" name="tmptlahir" id="text-input" placeholder="Your answer here">
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

<style>
    body {
        background-color: #f5f5f5;
    }

    h1 {
        color: black;
        font-size: 30px;
    }

    .customcon {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: auto;
        padding-top: 3vh;
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