<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'], // уникальный ключ
            [
                'name' => 'Admin',
                'password' => bcrypt('admin'),
                // добавьте роли или флаги, если нужно
            ]
        );
    }
}