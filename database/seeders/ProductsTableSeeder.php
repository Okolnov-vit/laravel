<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Карбюратор для Минск 125',
                'description' => 'Описание карбюратора...',
                'price' => 1500.00,
                'image' => 'img/карбюратор.jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Колесо для Восход 3м',
                'description' => 'Описание колеса...',
                'price' => 3000.00,
                'image' => 'img/колесо.jpg',
            ],
            // Добавьте еще товаров по необходимости
        ]);
    }
}
