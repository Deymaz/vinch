<?php

namespace App\Http\Controllers;

use App\Category;
use App\Exceptions\ModelNotFoundException;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class ProductController extends Controller
{
    /**
     * @param int $id
     *
     * @throws ModelNotFoundException
     *
     * @return Factory|View
     */
    public function getByCategory(int $id)
    {
        $category = Category::find($id);

        if (null === $category) {
            throw new ModelNotFoundException('Category does not exists');
        }

        return view('productsToCategoryList', ['products' => $category->products]);
    }
}
