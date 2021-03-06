<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Exceptions\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Services\FileManager;
use App\Services\TransliterationService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Services\RequestToModelMapper;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
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
     *
     * @return RedirectResponse
     */
    public function create(CreateCategoryRequest $request)
    {
        $category = new Category;
        $data = $request->validated();

        if ($request->hasFile('img_url')) {
            $data['img_url'] = FileManager::save(
                $request->file('img_url'),
                $data['parent_category_id'] . '_' .  $data['name']);
        }

        RequestToModelMapper::map($category, $data);
        $category->save();

        return Redirect::route(
            'categoriesList',
            ['locale' => Config::get('app.locale'), 'categories' => Category::all()]
        );
    }

    /**
     * @param int $id
     *
     * @throws ModelNotFoundException
     *
     * @return Factory|View
     */
    public function updatePage(int $id)
    {
        $category = Category::find($id);

        if (null === $category) {
            throw new ModelNotFoundException('Category does not exists');
        }

        $categories = Category::where('parent_category_id', null)->get();

        return view('admin.updateCategory', ['currentCategory' => $category, 'categories' => $categories]);
    }

    /**
     * @param int $id
     * @param CreateCategoryRequest $request
     *
     * @throws ModelNotFoundException
     *
     * @return RedirectResponse
     */
    public function update(int $id, CreateCategoryRequest $request)
    {
        $category = Category::find($id);

        if (null === $category) {
            throw new ModelNotFoundException('Category does not exists');
        }
        $data = $request->validated();
        $fileName = $data['parent_category_id'] . '_' . $data['name'];

        if ($category->name !== $data['name']) {
            $data['img_url'] = $request->hasFile('img_url')
                ? FileManager::save($request->file('img_url'), $fileName)
                : FileManager::editName($category->img_url, $fileName);
        }

        RequestToModelMapper::map($category, $data);
        $category->save();

        return Redirect::route(
            'categoriesList', ['locale' => Config::get('app.locale'), 'categories' => Category::all()]
        );
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        $category = Category::find($id);
        Storage::disk('public')->delete($category->img_url);
        $category->delete();

        return Redirect::route(
            'categoriesList', ['locale' => Config::get('app.locale'), 'categories' => Category::all()]
        );
    }
}
