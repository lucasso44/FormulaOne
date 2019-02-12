<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Searchresult;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function autocomplete(Request $request)
    {

        $searchResults = Searchresult::select('id', 'title as value')->where(function($query) use ($request){
            if(($keywords = $request->get("term"))) {
              $keywords = '%' . $keywords . '%';
              $query->orWhere("title", 'LIKE', $keywords);
              $query->orWhere("description", 'LIKE', $keywords);
              $query->orWhere("content", 'LIKE', $keywords);
            }

        })
        ->take(10)
        ->get();

        return $searchResults;
    }

    public function index(Request $request)
    {
        $searchResults = Searchresult::select('id', 'route', 'thumbnail', 'title', 'description')->where(function($query) use ($request){
            if(($keywords = $request->get("term"))) {
              $keywords = '%' . $keywords . '%';
              $query->orWhere("title", 'LIKE', $keywords);
              $query->orWhere("description", 'LIKE', $keywords);
              $query->orWhere("content", 'LIKE', $keywords);
            }

        })
        ->paginate(3);

        return view('search.index', compact('searchResults'));
    }
}
