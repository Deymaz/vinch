<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Services\RequestToModelMapper;

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
        $categories = Category::where('parent_category_id', null)->get();
        return view('admin.createCategoryPage', ['categories' => $categories]);
    }

    /**
     * @param CreateCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(CreateCategoryRequest $request)
    {
        $category = new Category;
        RequestToModelMapper::map($category, $request->validated());
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
        $categories = Category::where('parent_category_id', null)->get();

        return view('admin.updateCategory', ['currentCategory' => $category, 'categories' => $categories]);
    }

    /**
     * @param int $id
     * @param CreateCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(int $id, CreateCategoryRequest $request)
    {
        $category = Category::find($id);
        RequestToModelMapper::map($category, $request->validated());
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
