<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
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

        $posts = $category
            ->posts()
            ->with('author')
            ->latestFirst()
            ->published()
            ->simplepaginate($this->limit);
        return view("blogList", compact("posts", "categoryName"));
    }

    public function author(User $author) {
        $authorName = $author->name;;
        $posts = $author
            ->posts()
            ->with('category')
            ->latestFirst()
            ->published()
            ->simplepaginate($this->limit);
        return view("blogList", compact("posts", "authorName"));
    }

    public function show(Post $post)
    {
        $post->increment("views");
        return view('postPage', compact("post"));
    }
}
