<?php

namespace App\Http\Controllers;

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
        $gallerytip = Gallery::where('type', 'tip')->where('active', true)->get();
        $gallerytp = Gallery::where('type', 'tp')->where('active', true)->get();
        $gallerytm = Gallery::where('type', 'tm')->where('active', true)->get();
        $gallerytsm = Gallery::where('type', 'tsm')->where('active', true)->get();
        $footer = Footer::firstOrFail(); // Assuming you have only one footer record
        return view('home.index', [
            "title" => "Home - SMK Strada Jakarta" . $title,
            "posts" => $posts,
            "sliders" => $sliders,
            "gallerytip" => $gallerytip,
            "gallerytp" => $gallerytp,
            "gallerytm" => $gallerytm,
            "gallerytsm" => $gallerytsm,
            "footer" => $footer,

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
