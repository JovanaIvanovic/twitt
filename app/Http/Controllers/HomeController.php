<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts= Post::all();
        $users=User::all();
        return view('home', compact('posts', 'users'));
    }

    public function store(Request $request){
        $this->validate(request(),[
            'post'=>'required'
        ]);
        $post = $request->post;
        dd($post);
        auth()->user()->addPost($post);
        return redirect('/home');
    }
}
