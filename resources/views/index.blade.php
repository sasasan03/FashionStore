@extends('layouts.main')

@push('styles')
<style>
    /* ===== information ===== */
    .information {
        text-align: center;
        padding: 40px 20px;
    }

    .information h2 {
        color: #999;
        letter-spacing: 2px;
        font-size: 18px;
    }

    .information .notice {
        color: red;
        font-size: 14px;
        margin: 10px 0;
    }

    .information p {
        font-size: 13px;
        line-height: 1.8;
    }

    /* ===== product grid ===== */
    .products {
        max-width: 1200px;
        margin: 60px auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        padding: 0 20px;
    }

    /* 黒塗り画像ダミー */
    .product-image {
        width: 100%;
        aspect-ratio: 1 / 1;
        background: #000;
    }

    .product-body {
        padding: 15px;
        text-align: center;
    }

    .product-title {
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 14px;
        font-weight: bold;
    }

    .product {
        border: 1px solid #eee;
        display: block;
        color: inherit;
        text-decoration: none;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .product:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        transform: translateY(-4px);
    }

    .product-image img {
        width: 100%;
        display: block;
    }

    @media (max-width: 768px) {
        .products {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')

<section class="information">
    <h2>information</h2>
    <p class="notice">「メール便」対象商品は、メール便を選択すると送料無料となります。</p>
    <p>
        11,000円(税込)以上お買い上げで<strong>送料無料</strong>となります。
    </p>
</section>

<section class="products">
    @foreach ($products as $index => $product)
    <a class="product" href="{{ route('products.show', ['product' => $index]) }}">
        <div class="product-image">
            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
        </div>

        <div class="product-body">
            <div class="product-title">
                {{ $product['name'] }}
            </div>

            <div class="product-price">
                ¥{{ number_format($product['price']) }}
            </div>
        </div>
    </a>
    @endforeach
</section>

@endsection