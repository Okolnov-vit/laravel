<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $product = \App\Models\Product::findOrFail($productId);

        $basket = session('basket', []);

        if(isset($basket[$productId])) {
            $basket[$productId]['quantity'] += 1;
        } else {
            $basket[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image,
            ];
        }

        session(['basket' => $basket]);

        return redirect()->back()->with('success', 'Товар добавлен в корзину.');
    }

    public function clear()
    {
        session(['basket' => []]);
        return redirect()->back()->with('success', 'Корзина очищена.');
    }
}
