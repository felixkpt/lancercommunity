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
        $option = Option::where('name', 'show_in_homepage')->first();
        
        $title = 'Welcome Home!';
        if ($option) {
            $post = Post::where('id', $option->id)->first();
            $title = $post->title ?? $title;
        }

        $data = ['title' => $title, 'description' => null, 'post' => $post];
        return view('home', $data);
    }
}
