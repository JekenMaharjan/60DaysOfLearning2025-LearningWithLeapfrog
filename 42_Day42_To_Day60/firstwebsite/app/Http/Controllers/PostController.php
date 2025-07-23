<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all(); // Get all posts from the database
        return view('posts.index', compact('posts')); // Return the index view with all posts
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create'); // Return the form view to create a new post
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'title' => 'required',   // title field is required
            'message' => 'required', // message field is required
        ]);

        Post::create($validated); // Create a new post using the validated data
        return redirect()->route('posts.index')->with('success', 'Post created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id); // Find the post by ID or show 404 error if not found
        return view('posts.edit', compact('post')); // Return the edit form view with the post data
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the updated data
        $validated = $request->validate([
            'title' => 'required',
            'message' => 'required',
        ]);

        $post = Post::findOrFail($id); // Find the post by ID
        $post->update($validated);     // Update the post with new data
        return redirect()->route('posts.index')->with('success', 'Post updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
    {
        $post = Post::findOrFail($id); // Find the post by ID
        $post->delete();               // Delete the post
        return redirect()->route('posts.index')->with('success', 'Post deleted Successfully!');
    }
}
