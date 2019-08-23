<?php

namespace App\Http\Controllers;

use App\Exceptions\ModelNotFoundException;
use App\Product;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

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

        return view('productAssortimentPage', ['assortiment' => $product->assortiment]);
    }
}
