<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusans'; // Replace 'jurusan' with your actual table name
    protected $primaryKey = 'id'; // Replace 'id' with your actual primary key
    protected $fillable = ['title', 'content', 'type']; // Add other fillable columns as needed
}
