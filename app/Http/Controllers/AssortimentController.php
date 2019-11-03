<?php

namespace App\Http\Controllers;

use App\Assortiment;
use App\Exceptions\ModelNotFoundException;
use App\Product;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use App\Services\AssortimentFieldViewHandler;

class AssortimentController extends Controller
{
    /**
     * @param int $id
     *
     * @throws ModelNotFoundException
     *
     * @return Factory|View
     */
    public function getByProduct(int $id)
    {
        $product = Product::find($id);

        if (null === $product) {
            throw new ModelNotFoundException('Product does not exists');
        }

        $fieldHandler = new AssortimentFieldViewHandler();
        $filledFields = $fieldHandler->getFilledFields($product);
        $assortiment = $product->assortiment;

        return view('productAssortimentPage', ['filledFields' => $filledFields, 'assortiment' => $assortiment]);
    }

    /**
     * @param int $id
     *
     * @return Factory|View
     */
    public function getById(int $id)
    {
        $assortiment = Assortiment::find($id);

        if (null === $assortiment) {
            throw new ModelNotFoundException('Assortiment does not exists');
        }

        return view('assortiment', ['assortiment' => $assortiment]);
    }
}
