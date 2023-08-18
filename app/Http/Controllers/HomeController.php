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
        $gallerytip = Gallery::where('type', 'tip')->where('active', true)->limit(2)->get();
        $gallerytp = Gallery::where('type', 'tp')->where('active', true)->limit(2)->get();
        $gallerytm = Gallery::where('type', 'tm')->where('active', true)->limit(2)->get();
        $gallerytsm = Gallery::where('type', 'tsm')->where('active', true)->limit(2)->get();

        $footer = Footer::firstOrFail(); // Assuming you have only one footer record
        $desc = Description::firstOrFail();
        return view('home.index', [
            "title" => "Home - SMK Strada Jakarta" . $title,
            "posts" => $posts,
            "sliders" => $sliders,
            "gallerytip" => $gallerytip,
            "gallerytp" => $gallerytp,
            "gallerytm" => $gallerytm,
            "gallerytsm" => $gallerytsm,
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
