<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    /**
     * @param int $id
     *
     * @throws \InvalidArgumentException
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subcategoriesList(int $id)
    {
        $category = Category::find($id);

        if ($category->parent_category_id !== null) {
            throw new \InvalidArgumentException('This is not parent category');
        }

        $categories = Category::where('parent_category_id', $id)->get();

        return view('subcategoriesList', ['categories' => $categories]);
    }
}
