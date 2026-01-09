<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // カテゴリを slug で取得
        $tShirtCategory = Category::where('slug', 't-shirts')->first();
        $pantsCategory  = Category::where('slug', 'pants')->first();
        $outerCategory  = Category::where('slug', 'outer')->first();

        // 商品データ

        Product::firstOrCreate(
            ['slug' => 'logo-t-shirt'],
            [
                'category_id'  => $tShirtCategory->id,
                'name'         => 'ロゴTシャツ',
                'price'        => 3000,
                'is_active'    => true,
                'description'  => 'シンプルなロゴ入りTシャツです。',
            ]
        );

        Product::firstOrCreate(
            ['slug' => 'denim-pants'],
            [
                'category_id' => $pantsCategory->id,
                'name'        => 'デニムパンツ',
                'price'       => 8000,
                'is_active'   => true,
                'description' => '定番のストレートデニム。',
            ]
        );
        Product::firstOrCreate(
            ['slug' => 'nylon-jacket'],
            [
                'category_id' => $outerCategory->id,
                'name'        => 'ナイロンジャケット',
                'price'       => 12000,
                'is_active'   => true,
                'description' => '軽量で使いやすいアウター。',
            ]
        );
    }
}
