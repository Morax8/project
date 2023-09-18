<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppdb extends Model
{
    use HasFactory;

    protected $table = 'ppdbs';
    protected $fillable = [
        'jurusan',
        'mengetahuippdb',
        'kerabat',
        'nama',
        'nik',
        'jk',
        'tmptlahir',
        'tgllahir',
        'agama',
        'domisili',
        'rtrw',
        'kelurahan',
        'kecamatan',
        'kota',
        'anakbrp',
        'statusrumah',
        'nohp',
        'accsosmed',
        'tb',
        'bb',
        'asalsklh',
        'kotaasalsklh',
        'nisn',
        'tgllulus',
        'eskul',
        'namaayah',
        'nikayah',
        'nokk',
        'tmptlahirayah',
        'tgllahirayah',
        'pendidikanayah',
        'pekerjaanayah',
        'namaibu',
        'nikibu',
        'tmptlahiribu',
        'tgllahiribu',
        'pendidikanibu',
        'pekerjaanibu',
        'mapeldisukai',
        'tinggalkls',
        'prestasi',
        'gambarlingkungan',
        'kjp',
        'pip',
    ];
}
