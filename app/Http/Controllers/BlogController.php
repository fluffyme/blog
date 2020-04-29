<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    protected $limit = 3;
    public function index() {

//        \DB::enableQueryLog();
        $posts = Post::with('author')
//            ->orderBy("created_at", "desc")
//            ->latest()
                //scope
            ->LatestFirst()
            ->published()
            ->simplepaginate($this->limit);
        return view("blogList", compact("posts"));
//        dd(\DB::getQueryLog());
    }

    public function category(Category $category) {

        $categoryName = $category->title;

//        \DB::enableQueryLog();
        $posts = $category
            ->posts()
            ->with('author')
            ->latestFirst()
            ->published()
            ->simplepaginate($this->limit);
        return view("blogList", compact("posts", "categoryName"));
//        dd(\DB::getQueryLog());
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('postPage', compact("post"));
    }
}
