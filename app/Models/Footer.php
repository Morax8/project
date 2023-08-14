<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = ['logo', 'address', 'phone', 'website', 'email', 'about_content', 'map_embed'];
}
