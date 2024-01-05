<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id)->sortDesc();
        // return view('dashboard')->with('posts', $user->posts);

        $user_id = auth()->user()->id;
        $posts = Post::where('user_id', $user_id)->latest()->get();
        return view('dashboard')->with('posts', $posts);
    }
}
