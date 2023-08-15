<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $fillable = [
        'header1',
        'header2',
        'descspan',
        'descstrong',
        'desch1',
        'desc',
        'jmljurusan',
        'jurusan',
        'descjurusan',
        'jmlsiswa',
        'siswa',
        'descsiswa',
        'jmlguru',
        'guru',
        'descguru',
    ];
}
