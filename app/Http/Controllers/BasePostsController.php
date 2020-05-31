<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class BasePostsController extends Controller
{
    public function index() {
        $posts = App\BasePosts::all();
        return view('posts.knowledge', compact('posts'));
    }

    public function show($id) {
        $post = App\BasePosts::find($id);
        return view('posts.knowledge_page', compact('post'));
    }
}
