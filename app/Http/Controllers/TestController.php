<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function inscription()
    {
        
        $user=['email'=>'user@test.com','name'=>'monsieur truc'];
    

        Mail::to($user['email'])->send(new TestMail());
        
        
        return view('inscription');
    }
}
