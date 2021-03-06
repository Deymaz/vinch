<?php

namespace App\Http\Controllers;

use App\Assortiment;
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

        $content = $header = [];
        /** @var Assortiment $assortiment */
        $assortiment = $product->assortiment;
        $data = $assortiment->toArray();

        if (!empty($data)) {
            $content = array_shift($data)['content'];
            $content = json_decode($content, true);
            $header = array_shift($content);
        }

        return view('productAssortimentPage', ['header' => $header, 'content' => $content]);
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
