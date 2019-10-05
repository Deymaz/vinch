<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Exceptions\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use App\Services\FileManager;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Services\RequestToModelMapper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{
    use AuthenticatesUsers;

    /**
     * @return Factory|View
     */
    public function list()
    {
        return view('admin.productsList', ['products' => Product::all()]);
    }

    /**
     * @return Factory|View
     */
    public function createPage()
    {
        return view('admin.createProductPage', ['categories' => Category::whereNotNull('parent_category_id')->get()]);
    }

    /**
     * @param CreateProductRequest $request
     * @return RedirectResponse
     */
    public function create(CreateProductRequest $request)
    {
        $product = new Product;
        $data = $request->validated();
        if ($request->hasFile('file_url')) {
            $category = Category::find((int)$data['category_id']);
            $fileName = sprintf('%s_%s', $category->name, $data['name']);
            $data['file_url'] = FileManager::save($request->file('file_url'), $fileName);
        }

        RequestToModelMapper::map($product, $data);
        $product->save();

        return Redirect::route('productsList', Config::get('app.locale'));
    }

    /**
     * @param int $id
     * @return Factory|View
     */
    public function updatePage(int $id)
    {
        $product = Product::find($id);
        if (null === $product) {
            throw new ModelNotFoundException('Product does not exists');
        }
        $categories = Category::whereNotNull('parent_category_id')->get();

        return view('admin.updateProduct', ['product' => $product, 'categories' => $categories ]);
    }

    public function update(int $id, CreateProductRequest $request)
    {
        $product = Product::find($id);
        if (null === $product) {
            throw new ModelNotFoundException('Product does not exists');
        }

        $data = $request->validated();

        $fileName = sprintf('%s_%s', $product->category->name, $data['name']);
        $data['file_url'] = $request->hasFile('file_url')
            ? FileManager::save($request->file('file_url'), $fileName)
            : FileManager::editName($product->file_url, $fileName);

        RequestToModelMapper::map($product, $data);
        $product->save();

        return Redirect::route('productsList', Config::get('app.locale'));
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        $product = Product::find($id);

        if (null === $product) {
            throw new ModelNotFoundException('Product does not exists');
        }

        Storage::disk('public')->delete($product->file_url);
        $product->delete();

        return Redirect::route('productsList', Config::get('app.locale'));
    }
}
