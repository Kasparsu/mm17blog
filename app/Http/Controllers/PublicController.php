<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
        $posts = Post::latest()->take(10)->get();
        return view('index', compact('posts'));
    }
    public function posts(){
        $posts = Post::latest()->with('author')->paginate();

        return view('posts.index', compact('posts'));
    }
    public function viewPost(Post $post){
        return view('posts.view', compact('post'));
    }
}
