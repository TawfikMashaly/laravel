<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // All Data
    public function index() {
        $posts = Post::all();
        return response()->json($posts);
    }
    // get post
    public function show($id) {
        $post = Post::find($id);
        return response()->json($post);
    }
    // Create Post
    public function store(Request $request) {
        $post = Post::create($request->all());
        return response()->json($post , 201);
    }
    // Update Post
    public function update(Request $request, $id) {
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json($post , 200);
    }
    // Delete Post
    public function delete( $id ) {
        Post::destroy($id);
        return response()->json(null , 204);
    }
}
