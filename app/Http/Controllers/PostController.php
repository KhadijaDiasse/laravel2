<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;
class PostController extends Controller
{
    public function index()
    {
        return view('inscription');
    }
    public function store(Request $request)
    {
        
        // $post = new Post;
        
        $a = $request['email'];
        
        $b= $request['objet'];
        $c= $request['message'];
        $name = explode(' ' , $a);
        // print_r (explode(',', $a));
        //  $traitemail=explode(" ", $a, );
        // $post->objet= $request->objet;
        // $post->message= $request->message;
        // $post->save();
        // dd($name);
        
    
        return redirect('inscription');
        // ->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
