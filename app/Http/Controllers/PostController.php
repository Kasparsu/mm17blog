<?php

namespace App\Http\Controllers;

use App\Image;
use App\Post;
use Auth;
use Illuminate\Http\Request;
use Storage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $posts = Auth::user()->posts()->paginate();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->body = $request->input('body');
        $post->title = $request->input('title');
        $post->user_id = Auth::user()->id;
        $post->save();
        if($request->input('image_url') != '') {
            $contents = file_get_contents($request->input('image_url'));
            $fileEnding = explode('.', $request->input('image_url'));
            $fileEnding = $fileEnding[count($fileEnding)-1];
            $name = bcrypt(now() . $request->input('image_url')) . '.' . $fileEnding;
            Storage::disk('public')->put($name, $contents);
            $image = new Image();
            $image->path = '/storage/' . $name;
            $image->post()->associate($post);
            $image->save();
        }
        if($request->file('image')){
            $path = $request->file('image')->store('public');
            $image = new Image();
            $image->path = '/storage/' . explode('/',$path)[1];
            $image->post()->associate($post);
            $image->save();
        }
        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->body = $request->input('body');
        $post->title = $request->input('title');
        $post->save();
        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/admin/posts');
    }
}
