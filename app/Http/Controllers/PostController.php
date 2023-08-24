<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Footer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Session\Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = '';
        $footer = Footer::firstorFail();
        return view('home.posts', [
            "title" => "All News" . $title,
            "active" => "News",
            "posts" => Post::latest()->paginate(7)->withQueryString(),
            "footer" => $footer,
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

    public function cmsIndex()
    {
        $posts = Post::paginate(10); // Fetch all posts from the database

        return view('admin.news.index', compact('posts'));
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
            'image' => 'required|file|image',
            'excerpt' => 'required',
            'body' => 'required',
        ]);



        $input = [
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title'), '-'),
            'excerpt' => $request->input('excerpt'),
            'body' => $request->input('body'),
            'active' => $request->has('active'),
        ];

        if ($image = $request->file('image')) {
            $desiredFileName = $request->input('title');
            $imageName = $desiredFileName . now()->format('Y-m-d') . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName; // Add this line to set the 'image' attribute
        }

        Post::create($input);

        return redirect('/postscms');
    }


    // Update the information of an existing post in the database
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|file|image',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $post->title = $request->input('title');
        $post->excerpt = $request->input('excerpt');
        $post->body = $request->input('body');
        $post->slug = Str::slug($request->input('title'), '-');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $post->title . now()->format('Y-m-d') . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);

            if ($post->image && file_exists(public_path('images/' . $post->image))) {
                unlink(public_path('images/' . $post->image));
            }
            $post->image = $imageName;
        }

        $post->save();

        return redirect('/postscms');
    }





    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/postscms');
    }
}
