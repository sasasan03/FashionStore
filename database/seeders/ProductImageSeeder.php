<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            ProductImage::firstOrCreate(
                [
                    'product_id' => $product->id,
                    'image_path' => 'https://picsum.photos/seed/product-1-main/300/400',
                    'sort_order' => 1,
                ],
            );
            ProductImage::firstOrCreate(
                [
                    'product_id' => $product->id,
                    'image_path' => 'https://picsum.photos/seed/product-2-sub/300/400',
                    'sort_order' => 2,
                ],
            );
            ProductImage::firstOrCreate(
                [
                    'product_id' => $product->id,
                    'image_path' => 'https://picsum.photos/seed/product-3-sub/300/400',
                    'sort_order' => 3,
                ],
            );
            ProductImage::firstOrCreate(
                [
                    'product_id' => $product->id,
                    'image_path' => 'https://picsum.photos/seed/product-4-sub/300/400',
                    'sort_order' => 4,
                ],
            );
            ProductImage::firstOrCreate(
                [
                    'product_id' => $product->id,
                    'image_path' => 'https://picsum.photos/seed/product-5-sub/300/400',
                    'sort_order' => 5,
                ],
            );
        }
    }
}
