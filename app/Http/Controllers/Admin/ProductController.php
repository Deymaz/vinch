<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
        return view('admin.createProductPage', ['categories' => Category::all()]);
    }

    /**
     * @param CreateProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(CreateProductRequest $request)
    {
       $data = $request->validated();

        $product = new Product;

        $product->category_id = $data['category_id'];
        $product->name_ru = $data['name_ru'];
        $product->description_ru = $data['description_ru'];
        $product->name_ua = $data['name_ua'];
        $product->description_ua = $data['description_ua'];
        $product->name_en = $data['name_en'];
        $product->description_en = $data['description_en'];

        $product->save();

        return Redirect::route('productsList');
    }
}