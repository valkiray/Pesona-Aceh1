<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;

class PostController extends Controller
{
    public function index()
    {
        $title = "Post";
        $posts = Post::with('images')->get();
        return view('posts.index', compact('title', 'posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'content' => 'required',
            'googlemaps' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::create([
            'nama' => $request->nama,
            'content' => $request->content,
            'googlemaps' => $request->googlemaps,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                Image::create([
                    'post_id' => $post->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'nama' => 'required',
            'content' => 'required',
            'googlemaps' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post->update($request->all());

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                Image::create([
                    'post_id' => $post->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('posts.index')
                         ->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->images()->delete();
        $post->delete();

        return redirect()->route('posts.index')
                         ->with('success', 'Post deleted successfully.');
    }

    public function gallery()
    {
        $title = "Gallery";
        $images = Image::all();
        return view('posts.gallery', compact('title', 'images'));
    }
}
