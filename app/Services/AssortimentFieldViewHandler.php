<?php

namespace App\Services;

use App\Product;

class AssortimentFieldViewHandler
{
    private const HIDDEN_FIELDS = ['id', 'product_id', 'created_at', 'updated_at'];

    /**
     * @param Product $product
     *
     * @return array
     */
    public function getFilledFields(Product $product): array
    {
        $fields = [];

        foreach ($product->assortiment as $assortiment) {
            $filledFields = array_keys(array_filter($assortiment->getAttributes()));
            foreach ($filledFields as $filledField) {
                $fields[] = $filledField;
            }
        }

        return array_diff(array_unique($fields), self::HIDDEN_FIELDS);
    }
}
