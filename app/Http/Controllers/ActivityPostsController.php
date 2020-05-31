<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ActivityPostsController extends Controller
{
    public function show_posts($id) {
        $posts = App\Models\ActivityPosts::where('post_id', $id)->get();
        $category = App\ActivityCategories::where('id', $id)->get();
        return view('posts.index', compact('posts', 'category'));
    }

    public function show_post($id) {
        $post = App\Models\ActivityPosts::where('id', $id)->get();
        $category = App\ActivityCategories::where('id', $post[0]->post_id)->get();
        return view('posts.post', compact('post', 'category'));
    }

    public function index() {
        return view('posts.activities');
    }

    public function search(Request $request) {
        $posts = App\Models\ActivityPosts::where('city', $request['search'])->get();
        return $posts;
    }

    public function add_show() {
        return view('requests.request');
    }

    public function add_activity_show() {
        return view('requests.add_activity');
    }

    public function add_activity(Request $data) {
        $category = App\ActivityCategories::where('id', $data['post_id'])->get();
        $kind_help = $category[0]->title;

        $new_activity = App\Models\ActivityPosts::create([
            'post_id' => $data['post_id'],
            'title' => $data['title'],
            'image' => $data['image'],
            'user_name' => $data['user_name'],
            'organisation_name' => $data['organisation_name'],
            'region' => $data['region'],
            'city' => $data['city'],
            'date' => $data['date'],
            'time' => $data['time'],
            'kind_help' => $kind_help,
            'description' => $data['description'],
        ]);
        return view('requests.add_activity');
    }
}

