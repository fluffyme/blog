<?php

namespace App\Http\Controllers;

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
            ->simplepaginate($this->limit);
        return view("blogList", compact("posts"));
//        dd(\DB::getQueryLog());
    }
}
