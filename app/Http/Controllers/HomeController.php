<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = [
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
        ];

        return view('index', compact('products'));
    }
}
