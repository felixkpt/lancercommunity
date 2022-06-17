<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Option;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Settings\SiteInfo;

class HomeController extends Controller
{
    /** 
     * Our homepage method
     * @return Response
     */
    public function index() {
        $option = Option::where('name', 'show_in_homepage')->first();
 
        $title = SiteInfo::title();
        $description = SiteInfo::description();
       
        $post = null;
        if ($option) {
            $post = Post::where('id', $option->id)->first();
            if (!$post) {
                Option::find($option->id)->delete();
            }   
            $title = $post->title ?? $title;
        }

        $categories = Category::latest()->limit(8)->get();
        $posts = Post::latest()->where('post_type', 'post')->where('published', 'published')->limit(5)->get();
        $reviews = Review::latest()->limit(4)->get();
       
        $data = ['title' => $title, 'description' => $description, 'post' => $post, 'hide_sidebar' => true,
                    'categories' => $categories, 'posts' => $posts, 'reviews' => $reviews,];
        return view('home/index', $data);
    }
}
