<?php

namespace App\Http\Controllers\Admin;

use App\Assortiment;
use App\Exceptions\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAssortimentRequest;
use App\Product;
use App\Services\RequestToModelMapper;
use Illuminate\Support\Facades\Config;
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
        if (null === Product::find($id)) {
            throw new ModelNotFoundException(sprintf('Продукта с Id %s не существует', $id));
        }

        return view('admin.createAssortimentPage', ['fieldList' => (new Assortiment())->getFillable(), 'id' => $id]);
    }

    /**
     * @param int $id
     * @param CreateAssortimentRequest $request
     *
     * @throws ModelNotFoundException
     *
     * @return RedirectResponse
     */
    public function create(int $id, CreateAssortimentRequest $request)
    {
        $product = Product::find($id);

        if (null === $product) {
            throw new ModelNotFoundException('Product does not exists');
        }

        $assortiment = new Assortiment;
        RequestToModelMapper::map($assortiment, array_merge(['product_id' => $product->id], $request->validated()));
        $assortiment->save();

        return Redirect::route('productsList', ['locale' => Config::get('app.locale')]);
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
        $assortiment = Assortiment::find($id);

        if (null === $assortiment) {
            throw new ModelNotFoundException('Assortiment does not exists');
        }

        return view('admin.updateAssortimentPage', ['assortiment' => $assortiment]);
    }

    /**
     * @param int $id
     * @param CreateAssortimentRequest $request
     *
     * @throws ModelNotFoundException
     *
     * @return RedirectResponse
     */
    public function update(int $id, CreateAssortimentRequest $request)
    {
        $assortiment = Assortiment::find($id);

        if (null === $assortiment) {
            throw new ModelNotFoundException('Assortiment does not exists');
        }

        RequestToModelMapper::map($assortiment, $request->validated());
        $assortiment->save();

        return Redirect::route('productsList',
            ['locale' => Config::get('app.locale')]
        );
    }

    /**
     * @param int $id
     *
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        Assortiment::destroy([$id]);

        return Redirect::route('productsList', ['locale' => Config::get('app.locale')]);
    }
}
