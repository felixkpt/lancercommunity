<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** 
     * Our homepage method
     * @return Response
     */
    public function index() {
        $id = Option::where('name', 'show_in_homepage')->first()->value;
        $post = Post::where('id', $id)->first();
        $title = $post->title ?? 'Welcome Home!';
        $data = ['title' => $title, 'description' => null, 'post' => $post];
        return view('home', $data);
    }
}
