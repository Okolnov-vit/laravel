<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CatalogController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get(); // или пагинация
        return view('catalog.index', compact('products'));
    }
}
