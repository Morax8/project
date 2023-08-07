<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $primaryKey = 'id'; // Replace 'id' with your actual primary key
    protected $fillable = ['title', 'content', 'type']; // Add other fillable columns as needed
}
