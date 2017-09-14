<?php

namespace App\Http\Controllers;

use App\Post;

class GuestController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function welcome()
    {
        $post = Post::orderBy('created_at', 'DESC')->limit(4)->get();
        return view('welcome')->withPost($post);
    }
}
