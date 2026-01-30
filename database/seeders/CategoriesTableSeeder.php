<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Минск 125', 'slug' => 'minsk-125'],
            ['name' => 'Восход 3м', 'slug' => 'voshod-3m'],
        ]);
    }
}
