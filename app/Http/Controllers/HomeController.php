<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function blog($id, $author = 'default author')
    {
        $post = [
            'title' => '<a>first post</a>'
        ];
    
        return view('posts.show', [
            'post' => $post,
            'id' => $id,
            'author' => $author
            ]
        );    
    }
}
