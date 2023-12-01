<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $posts = Post::all()->take(4);
        $randomPost = $posts->random();
        $categories = Category::all();
        $emergencyPosts = Post::where('IsEmergency', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('Post.index', compact(['posts', 'randomPost', 'categories', 'emergencyPosts']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with('user')->findOrfail($id);
        $comments = Comment::with('user')->where('post_id', '=', $id)->get();
        return view('Post.Show', compact('post','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
