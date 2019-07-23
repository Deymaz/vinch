<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Product;
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
        RequestToModelMapper::map($product, $request->validated());
        $product->save();

        return Redirect::route('productsList');
    }
}
