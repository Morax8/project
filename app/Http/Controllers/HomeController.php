<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $title = '';

        $posts = Post::latest()->paginate(3)->withQueryString(); // Get latest 3 posts
        $sliders = Slider::where('active', true)->get();

        return view('home.index', [
            "title" => "Home - SMK Strada Jakarta" . $title,
            "posts" => $posts,
            "sliders" => $sliders,
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
