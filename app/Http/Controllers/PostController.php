<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        //dd($post);

        return view('posts.index', compact('posts')); 
        /* return('siamo nell index dei post'); */

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
        /* dd($request); */

        $newPost = new Post();
        $newPost->name = $request->name;
        $newPost->description = $request->description;
        $newPost->src = $request->src;
        $newPost->used_technologies = $request->used_technologies;
        $newPost->link = $request->link;

        $newPost->save();

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
