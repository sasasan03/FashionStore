<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => "ロゴTシャツ{$i}",
                'price' => 6800,
                'category_id' => 1,
                'image_path' => 'products/tshirt.jpg',
                'is_active' => true,
            ]);
        }
    }
}
