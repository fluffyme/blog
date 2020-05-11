<?php

namespace App\Views\Composers;

use App\Category;
use App\Post;
use Illuminate\View\View;

class NavigationComposer{

    public function compose(View $view){
        $this->composeCategory($view);
        $this->composePopularPosts($view);
    }

    private function composeCategory($view){
        $categories = Category::with(['posts'=> function($q){
            $q->published();
        }])->orderBy('title',"asc")->get();

        $view->with('categories', $categories);
    }

    private function composePopularPosts($view){

        $popularPosts = Post::published()->popular()->take(3)->get();

        $view->with('popularPosts', $popularPosts);

    }

}
