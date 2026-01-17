<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = Product::with('mainImage')->get();

        return view('index', compact('products'));
    }

    public function show(Product $product): View
    {
        // リレーション関係にあるhasManyをとってきている
        $images = $product->images;

        $mainImage = $product->images->firstWhere('sort_order', 1);

        return view('show', [
            'product' => $product,
            'images' => $images,
            'mainImage' => $mainImage
        ]);
    }
}
