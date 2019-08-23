<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class ProductController extends Controller
{
    /**
     * @param int $id
     *
     * @return Factory|View
     */
    public function getByCategory(int $id)
    {
        $category = Category::find($id);

        return view('productsToCategoryList', ['products' => $category->products]);
    }
}
