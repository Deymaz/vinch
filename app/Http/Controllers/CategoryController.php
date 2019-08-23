<?php

namespace App\Http\Controllers;

use App\Category;
use App\Exceptions\ModelNotFoundException;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class CategoryController extends Controller
{
    /**
     * @param int $id
     *
     * @throws ModelNotFoundException
     * @throws \InvalidArgumentException
     *
     * @return Factory|View
     */
    public function subcategoriesList(int $id)
    {
        $category = Category::find($id);

        if (null === $category) {
            throw new ModelNotFoundException('Category does not exists');
        }

        if ($category->parent_category_id !== null) {
            throw new \InvalidArgumentException('This is not parent category');
        }

        $categories = Category::where('parent_category_id', $id)->get();

        return view('subcategoriesList', ['categories' => $categories]);
    }
}
