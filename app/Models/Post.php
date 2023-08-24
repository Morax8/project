<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'image',
        'slug',
        'excerpt',
        'body',
    ];


    //     public function category()
    //     {
    //         return $this->belongsTo(Category::class);
    //     }
}
