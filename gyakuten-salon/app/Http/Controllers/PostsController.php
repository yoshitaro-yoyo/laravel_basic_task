<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
//viewのpostsのindexを返すという処理。次はposts.indexを作成する。
//viewsの中にある
    }
    
    public function create() 
    {
        return view('posts.create');
    }
    
    public function store(Request $request) 
    {
        $params = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:140',
            ]);
            
        Post::create($params);
            
        return redirect()->route('top');
        
    }
}