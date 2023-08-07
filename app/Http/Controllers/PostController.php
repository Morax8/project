<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = '';
        return view('home.posts', [
            "title" => "All News" . $title,
            "active" => "News",
            "posts" => Post::latest()->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('home.post', [
            "title" => "Single News",
            "active" => "News",
            "post" => $post
        ]);
    }



    public function create()
    {
        return view('admin.news.create');
    }



    public function edit($id)
    {
        // Fetch the single Post model based on the given ID
        $post = Post::findOrFail($id);

        return view('admin.news.edit', compact('post'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'body' => 'required',
            // Add other validation rules as needed
        ]);

        // Create a new Post instance and fill it with the request data
        $post = new Post([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'excerpt' => $request->input('excerpt'),
            'body' => $request->input('body'),
        ]);

        // Save the post to the database
        $post->save();

        return redirect('/postscms');
    }

    // Update the information of an existing post in the database
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $slug = Str::slug($request->input('title'), '-');

        $post->update([
            'title' => $request->input('title'),
            'slug' => $slug,
            'excerpt' => $request->input('excerpt'),
            'body' => $request->input('body'),
        ]);

        return redirect('/postscms');
    }





    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/postscms');
    }

    public function cmsIndex()
    {
        $posts = Post::latest()->paginate(10); // Fetch all posts from the database

        return view('admin.news.index', compact('posts'));
    }
}
