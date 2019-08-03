<?php

namespace App\Http\Controllers\Admin;

use App\Assortiment;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAssortimentRequest;
use App\Product;
use App\Services\ProductAssortimentFieldList;
use App\Services\RequestToModelMapper;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;

class AssortimentController extends Controller
{
    /**
     * @param int $id
     *
     * @return Factory|View
     */
    public function list(int $id)
    {
        $assortimentList = Product::find($id)->assortiment;

        return view('admin.assortimentList', ['assortimentList' => $assortimentList]);
    }
    /**
     * @param int $id
     *
     * @return Factory|View
     */
    public function createPage(int $id)
    {
        $fieldList = ProductAssortimentFieldList::list(Product::find($id));

        return view('admin.createAssortimentPage', ['fieldList' => $fieldList, 'id' => $id]);
    }

    /**
     * @param int $id
     * @param CreateAssortimentRequest $request
     *
     * @return RedirectResponse
     */
    public function create(int $id, CreateAssortimentRequest $request)
    {
        $product = Product::find($id);

        $assortiment = new Assortiment;
        RequestToModelMapper::map($assortiment, array_merge(['product_id' => $product->id], $request->validated()));
        $assortiment->save();

        return Redirect::route('productsList');
    }

    /**
     * @param int $id
     * @return Factory|View
     */
    public function updatePage(int $id)
    {
        $assortiment = Assortiment::find($id);
        $fieldList = ProductAssortimentFieldList::list($assortiment->product);

        return view('admin.updateAssortimentPage', ['fieldList' => $fieldList, 'assortiment' => $assortiment]);
    }

    /**
     * @param int $id
     * @param CreateAssortimentRequest $request
     *
     * @return RedirectResponse
     */
    public function update(int $id, CreateAssortimentRequest $request)
    {
        $assortiment = Assortiment::find($id);

        RequestToModelMapper::map($assortiment, $request->validated());
        $assortiment->save();

        return Redirect::route('productsList');
    }

    /**
     * @param int $id
     *
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        Assortiment::destroy([$id]);

        return Redirect::route('productsList');
    }
}
