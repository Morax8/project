<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerjasama extends Model
{
    use HasFactory;

    protected $table = 'kerjasamas';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content'];
}
