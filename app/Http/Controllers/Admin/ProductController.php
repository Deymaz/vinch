<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use App\Services\ProductFileManager;
use http\Exception\InvalidArgumentException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Services\RequestToModelMapper;

class ProductController extends Controller
{
    use AuthenticatesUsers;

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(CreateProductRequest $request)
    {
        $product = new Product;
        $data = $request->validated();
        if ($request->hasFile('file_url')) {
            $data['file_url'] = ProductFileManager::save($request->file('file_url'), $request->get('name'));
        }

        RequestToModelMapper::map($product, $data);
        $product->save();

        return Redirect::route('productsList');
    }

    /**
     * @param int $id
     * @return Factory|View
     */
    public function updatePage(int $id)
    {
        $product = Product::find($id);
        $categories = Category::whereNotNull('parent_category_id')->get();

        return view('admin.updateProduct', ['product' => $product, 'categories' => $categories ]);
    }

    public function update(int $id, CreateProductRequest $request)
    {
        $product = Product::find($id);
        $data = $request->validated();

        $data['file_url'] = $request->hasFile('file_url')
            ? ProductFileManager::save($request->file('file_url'), $request->get('name'))
            : ProductFileManager::editName($product->file_url, $data['name']);

        RequestToModelMapper::map($product, $data);
        $product->save();

        return Redirect::route('productsList');
    }
}
