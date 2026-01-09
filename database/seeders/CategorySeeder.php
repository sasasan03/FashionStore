<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::firstOrCreate(
            ['name' => 'Tシャツ'],
            ['slug' => 't-shirts']
        );

        Category::firstOrCreate(
            ['name' => 'パンツ'],
            ['slug' => 'pants']
        );

        Category::firstOrCreate(
            ['name' => 'アウター'],
            ['slug' => 'outer']
        );
    }
}
