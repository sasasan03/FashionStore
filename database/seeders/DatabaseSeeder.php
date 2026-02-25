<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        $tShirtCategory = Category::firstOrCreate(
            ['name' => 'Tシャツ'],
            ['slug' => 't-shirts']
        );

        $pantsCategory = Category::firstOrCreate(
            ['name' => 'パンツ'],
            ['slug' => 'pants']
        );

        $outerCategory = Category::firstOrCreate(
            ['name' => 'アウター'],
            ['slug' => 'outer']
        );

        // 商品データ
        $logoT = Product::firstOrCreate(
            ['slug' => 'logo-t-shirt'],
            [
                'category_id'  => $tShirtCategory->id,
                'name'         => 'ロゴTシャツ',
                'price'        => 3000,
                'is_active'    => true,
                'description'  => 'シンプルなロゴ入りTシャツです。',
            ]
        );

        $denim = Product::firstOrCreate(
            ['slug' => 'denim-pants'],
            [
                'category_id' => $pantsCategory->id,
                'name'        => 'デニムパンツ',
                'price'       => 8000,
                'is_active'   => true,
                'description' => '定番のストレートデニム。',
            ]
        );

        $nylonJacket = Product::firstOrCreate(
            ['slug' => 'nylon-jacket'],
            [
                'category_id' => $outerCategory->id,
                'name'        => 'ナイロンジャケット',
                'price'       => 12000,
                'is_active'   => true,
                'description' => '軽量で使いやすいアウター。',
            ]
        );

        ProductImage::firstOrCreate(
            [
                'product_id' => $logoT->id,
                'image_path' => 'https://picsum.photos/seed/product-1-main/300/400',
                'sort_order' => 1,
            ],
        );
        ProductImage::firstOrCreate(
            [
                'product_id' => $denim->id,
                'image_path' => 'https://picsum.photos/seed/product-2-sub/300/400',
                'sort_order' => 2,
            ],
        );
        ProductImage::firstOrCreate(
            [
                'product_id' => $nylonJacket->id,
                'image_path' => 'https://picsum.photos/seed/product-3-sub/300/400',
                'sort_order' => 3,
            ],
        );
    }
}
