<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;

        $posts = Post::where('title', 'LIKE', "%{$search}%")
		->latest()->paginate();

        return view('home', compact('posts'));
    }
    
    public function post(Post $post)
    {
        //Consulta de base de datos


        return view('post', ['post' => $post]);
    }
}
