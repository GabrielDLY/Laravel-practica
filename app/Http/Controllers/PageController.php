<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {     
        //Consulta de base de datos

        // $posts = Post::get();
        // $posts = Post::first();
        // $posts = Post::find();
        
        $posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        //Consulta de base de datos


        return view('post', ['post' => $post]);
    }
}
