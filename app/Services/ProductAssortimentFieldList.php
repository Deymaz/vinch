<?php

namespace App\Services;

use App\Product;

class ProductAssortimentFieldList
{
    private const LIST = [
        'qwe' => ['name' => 'Имя', 'usage' => 'Использование', 'crop_potential' => 'Потенциал'],
    ];

    /**
     * @param Product $product
     * @return array
     */
    public static function list(Product $product): array
    {
        return self::LIST[$product->name];
    }
}
