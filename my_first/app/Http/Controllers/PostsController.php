<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() 
    {
        return view('posts.index')
    }
}
//viewのpostsのindexを返すという処理。次はposts.indexを作成する。
//viewsの中にある