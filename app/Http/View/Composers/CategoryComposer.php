<?php




namespace App\Http\View\Composers;

use App\Category;
use Illuminate\View\View;

class CategoriesComposer
{

    public function compose(View $view)
    {
        $view->with('categories', Category::with('products')->get());

    }
}
