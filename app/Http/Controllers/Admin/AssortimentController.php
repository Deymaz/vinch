<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;

class AssortimentController extends Controller
{
    public function productsToCategoriesPage()
    {
        $products = Product::all();
        dd($products);
    }
}
