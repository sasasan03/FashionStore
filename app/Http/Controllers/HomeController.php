<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = Product::with('mainImage')->get();

        return view('customer.index', compact('products'));
    }

    public function show(Product $product): View
    {
        // リレーション関係にあるhasManyをとってきている
        $product->load('images');
        $images = $product->images;

        $mainImage = $images->firstWhere('sort_order', 1);

        return view('customer.show', [
            'product' => $product,
            'images' => $images,
            'mainImage' => $mainImage
        ]);
    }
}
