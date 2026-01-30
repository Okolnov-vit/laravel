<?php

namespace App\Http\Controllers;

use App\Models\Clientele;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('basket');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        // Предположим, у вас есть корзина в сессии
        $basket = session('basket', []);

        $total = 0;
        foreach ($basket as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $client = Clientele::create([
            'phoneNumber' => $validated['phone'],
            'deliveryAddress' => $validated['address'],
            'total' => $total,
        ]);

        // Очистка корзины
        session(['basket' => []]);

        return redirect()->route('home')->with('success', 'Заказ успешно оформлен!');
    }
}
