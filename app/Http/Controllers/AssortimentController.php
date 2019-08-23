<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class AssortimentController extends Controller
{
    /**
     * @param int $id
     *
     * @return Factory|View
     */
    public function getByProduct(int $id)
    {
        $product = Product::find($id);

        return view('productAssortimentPage', ['assortiment' => $product->assortiment]);
    }
}
