<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Post;
use DB;

class PageController extends Controller
{
    //
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->take(2)->get();
        return view('index')->with('posts', $posts);
    }
}
