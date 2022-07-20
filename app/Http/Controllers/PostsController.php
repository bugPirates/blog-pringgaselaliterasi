<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function posts (){
        $posts = WinkPost::with('tags')
        ->live()
        ->orderBy('publish_date', 'DESC')
        ->paginate(10);
        return view('posts.posts', [
            'posts' => $posts,
        ]);
    }

    public function single($slug){
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

        return view('posts.single', compact('post'));
    }

    public function sharePosts()
    {
        $shareButtons = \Share::page(
            'https://onlinewebtutorblog.com/',
            'What you are writing, just share to world to learn!!',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        $posts = Post::get();

        return view("share-post", compact('shareButtons', 'posts'));
    }
}
