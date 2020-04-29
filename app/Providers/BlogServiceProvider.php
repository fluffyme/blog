<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('sidebar', function($view){

            $categories = Category::with(['posts'=> function($q){
                $q->published();
            }])->orderBy('title',"asc")->get();

            return $view->with('categories', $categories);
        });
    }
}
