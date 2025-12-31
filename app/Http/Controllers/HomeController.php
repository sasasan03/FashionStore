<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = $this->products();

        return view('index', compact('products'));
    }

    public function show(int $product): View
    {
        $products = $this->products();

        if (! array_key_exists($product, $products)) {
            abort(404);
        }

        return view('show', [
            'product' => $products[$product],
        ]);
    }

    private function products(): array
    {
        return [
            [
                'name'  => 'ロゴTシャツ',
                'price' => 6800,
                'image' => 'https://fastly.picsum.photos/id/177/400/300.jpg?hmac=opOqw2dH65_Eh0iBq2hJJrb9vuBDTXZUv5RPnzMA-IU',
            ],
            [
                'name'  => 'デニムジャケット',
                'price' => 12800,
                'image' => 'https://fastly.picsum.photos/id/296/400/300.jpg?hmac=C54bXW0mSrW3TujRxxR5j85nXpXypy6PO3FgCikphBw',
            ],
            [
                'name'  => 'ワイドデニム',
                'price' => 9800,
                'image' => 'https://fastly.picsum.photos/id/541/400/300.jpg?hmac=Nv2HGFRcYYspp9apC3lhW0Pbeb1yjhaG7nQIu--zqF8',
            ],
            [
                'name'  => 'ロゴTシャツ',
                'price' => 6800,
                'image' => 'https://fastly.picsum.photos/id/541/400/300.jpg?hmac=Nv2HGFRcYYspp9apC3lhW0Pbeb1yjhaG7nQIu--zqF8',
            ],
            [
                'name'  => 'デニムジャケット',
                'price' => 12800,
                'image' => 'https://fastly.picsum.photos/id/541/400/300.jpg?hmac=Nv2HGFRcYYspp9apC3lhW0Pbeb1yjhaG7nQIu--zqF8',
            ],
            [
                'name'  => 'ワイドデニム',
                'price' => 9800,
                'image' => 'https://fastly.picsum.photos/id/541/400/300.jpg?hmac=Nv2HGFRcYYspp9apC3lhW0Pbeb1yjhaG7nQIu--zqF8',
            ],
            [
                'name'  => 'スウェットパーカー',
                'price' => 8900,
                'image' => 'https://fastly.picsum.photos/id/541/400/300.jpg?hmac=Nv2HGFRcYYspp9apC3lhW0Pbeb1yjhaG7nQIu--zqF8',
            ],
            [
                'name'  => 'チェックシャツ',
                'price' => 7500,
                'image' => 'https://fastly.picsum.photos/id/541/400/300.jpg?hmac=Nv2HGFRcYYspp9apC3lhW0Pbeb1yjhaG7nQIu--zqF8',
            ],
            [
                'name'  => 'ナイロンブルゾン',
                'price' => 14800,
                'image' => 'https://fastly.picsum.photos/id/541/400/300.jpg?hmac=Nv2HGFRcYYspp9apC3lhW0Pbeb1yjhaG7nQIu--zqF8',
            ],
            [
                'name'  => 'テーパードパンツ',
                'price' => 9200,
                'image' => 'https://fastly.picsum.photos/id/541/400/300.jpg?hmac=Nv2HGFRcYYspp9apC3lhW0Pbeb1yjhaG7nQIu--zqF8',
            ],
            [
                'name'  => 'ニットセーター',
                'price' => 8400,
                'image' => 'https://fastly.picsum.photos/id/1074/400/300.jpg',
            ],
            [
                'name'  => 'ロングコート',
                'price' => 19800,
                'image' => 'https://fastly.picsum.photos/id/1084/400/300.jpg',
            ],
            [
                'name'  => 'スニーカー',
                'price' => 11000,
                'image' => 'https://fastly.picsum.photos/id/21/400/300.jpg',
            ],
        ];
    }
}
