<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request, $id)
    {
        $user = User::findOrFail($id);
       
        Mail::to($request->user())->send($user);
    }
}
