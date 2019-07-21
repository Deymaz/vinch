<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    use AuthenticatesUsers;

    /**
     * @return Factory|View
     */
    public function categoriesList()
    {
        return view('admin.categoriesList', ['categories' => Category::all()]);
    }

    /**
     * @return Factory|View
     */
    public function createPage()
    {
        return view('admin.createCategoryPage');
    }

    /**
     * @param CreateCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(CreateCategoryRequest $request)
    {
        $data = $request->validated();
        $category = new Category;
        $category->name = $data['name'];

        $category->save();

        return Redirect::route('categoriesList', ['categories' => Category::all()]);
    }

    /**
     * @param int $id
     * @return Factory|View
     */
    public function updatePage(int $id)
    {
        $category = Category::find($id);

        return view('admin.updateCategory', ['category' => $category]);
    }

    /**
     * @param int $id
     * @param CreateCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(int $id, CreateCategoryRequest $request)
    {
        $data = $request->validated();

        $category = Category::find($id);
        $category->name = $data['name'];
        $category->save();

        return Redirect::route('categoriesList', ['categories' => Category::all()]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        Category::destroy([$id]);

        return Redirect::route('categoriesList', ['categories' => Category::all()]);
    }
}
