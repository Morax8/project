<?php

namespace App\Http\Controllers;

use App\Models\Description;
use App\Models\Post;
use App\Models\Footer;
use App\Models\Slider;
use App\Models\Gallery;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $title = '';

        $posts = Post::latest()->paginate(3)->withQueryString(); // Get latest 3 posts
        $sliders = Slider::where('active', true)->get();
        $gallery = gallery::latest()->paginate(8);

        $footer = Footer::firstOrFail(); // Assuming you have only one footer record
        $desc = Description::firstOrFail();
        return view('home.index', [
            "title" => "Home - SMK Strada Jakarta" . $title,
            "posts" => $posts,
            "sliders" => $sliders,
            "gallery" => $gallery,
            "footer" => $footer,
            "desc" => $desc,

        ]);
    }


    public function post($slug)
    {
        // Fetch the post by slug
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('home.post', [
            'post' => $post,
        ]);
    }
}
