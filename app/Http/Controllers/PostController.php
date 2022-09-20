<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('inscription');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->email= $request->email;
        $post->objet= $request->objet;
        $post->message= $request->message;
        $post->save();
        return redirect('inscription');
        // ->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
