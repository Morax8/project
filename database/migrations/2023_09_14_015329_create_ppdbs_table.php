<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('jurusan');
            $table->string('mengetahuippdb');
            $table->string('kerabat');
            $table->string('nama');
            $table->string('nik');
            $table->string('jk');
            $table->string('tmptlahir');
            $table->string('tgllahir');
            $table->string('agama');
            $table->string('domisili');
            $table->string('rtrw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('anakbrp');
            $table->string('statusrumah');
            $table->string('nohp');
            $table->string('accsosmed');
            $table->string('tb');
            $table->string('bb');
            $table->string('asalsklh');
            $table->string('kotaasalsklh');
            $table->string('nisn');
            $table->string('tgllulus');
            $table->string('eskul');
            $table->string('namaayah');
            $table->string('nikayah');
            $table->string('nokk');
            $table->string('tmptlahirayah');
            $table->string('tgllahirayah');
            $table->string('pendidikanayah');
            $table->string('pekerjaanayah');
            $table->string('namaibu');
            $table->string('nikibu');
            $table->string('tmptlahiribu');
            $table->string('tgllahiribu');
            $table->string('pendidikanibu');
            $table->string('pekerjaanibu');
            $table->string('mapeldisukai');
            $table->string('tinggalkls');
            $table->string('prestasi');
            $table->string('gambarlingkungan');
            $table->string('kjp');
            $table->string('pip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdbs');
    }
};
