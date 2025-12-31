@extends('layouts.main')

@push('styles')
<style>
    .product-detail {
        max-width: 1000px;
        margin: 40px auto 80px;
        padding: 0 20px;
        display: grid;
        grid-template-columns: 1.2fr 1fr;
        gap: 40px;
    }

    .product-media img {
        width: 100%;
        display: block;
        border: 1px solid #eee;
    }

    .product-info h1 {
        font-size: 24px;
        margin: 10px 0 16px;
    }

    .breadcrumb {
        font-size: 12px;
        color: #777;
        margin: 0 0 10px;
    }

    .breadcrumb a {
        color: inherit;
        text-decoration: none;
    }

    .product-price {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 16px;
    }

    .product-desc {
        font-size: 14px;
        line-height: 1.8;
        color: #555;
    }

    .product-specs {
        margin: 20px 0;
        padding-left: 18px;
        font-size: 13px;
        color: #666;
    }

    .product-actions {
        display: flex;
        gap: 12px;
        margin-top: 24px;
    }

    .btn,
    .btn-outline {
        display: inline-block;
        padding: 12px 18px;
        border-radius: 4px;
        font-size: 14px;
        text-decoration: none;
        text-align: center;
    }

    .btn {
        background: #111;
        color: #fff;
    }

    .btn-outline {
        border: 1px solid #111;
        color: #111;
    }

    @media (max-width: 768px) {
        .product-detail {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
<section class="product-detail">
    <div class="product-media">
        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
    </div>

    <div class="product-info">
        <p class="breadcrumb">
            <a href="{{ url('/') }}">TOP</a> / 商品詳細
        </p>
        <h1>{{ $product['name'] }}</h1>
        <p class="product-price">¥{{ number_format($product['price']) }}</p>
        <p class="product-desc">
            ここに商品の説明文が入ります。素材感やサイズ感、コーディネート例などの詳細を記載する想定です。
        </p>
        <ul class="product-specs">
            <li>素材: コットン100%</li>
            <li>サイズ: M / L / XL</li>
            <li>カラー: ブラック / ホワイト</li>
        </ul>
        <div class="product-actions">
            <a class="btn" href="#">カートに入れる</a>
            <a class="btn-outline" href="{{ url('/') }}">一覧に戻る</a>
        </div>
    </div>
</section>
@endsection
