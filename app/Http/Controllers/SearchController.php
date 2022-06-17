<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Settings\SiteInfo;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $results = null;

        if ($query = $request->get('query')) {
            $results = Post::search($query)->paginate(5);
        }

        $title = 'Search results for '.$request->get('query'). ' | '.SiteInfo::name();
        $description = 'Search results for '.$request->get('query').' | '.SiteInfo::name();
        return view('search', ['results' => $results, 'title' => $title, 'description' => $description]);
    }
}
