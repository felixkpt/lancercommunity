<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $result = null;

        if ($query = $request->get('query')) {
            $results = Post::search($query)->paginate(5);
        }

        return view('search', ['results' => $results]);
    }
}
