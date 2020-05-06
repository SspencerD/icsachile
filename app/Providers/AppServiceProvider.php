<?php

namespace App\Providers;

use App\Category;
use App\Http\View\Composers\CategoryComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
         $categories = Category::with('products')->get();

        /* View::composer(['/','categories.*','products.*','welcome.*','includes.*'],CategoriesComposer::class);

        */

        view()->composer('*', function($view) use($categories)
        {
            $view->with('categories',$categories);
        });
    }
}
