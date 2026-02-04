@extends('customer.layouts.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <script src="{{ asset('js/change-photo.js') }}" defer></script>
@endpush

@section('content')
    <!-- ページ全体 -->
    <div class="wrapper">
        <div class="product-main-container-layout">
            <!-- 商品タイトル -->
            <div class="header-title">
                <h2>{{ $product->name }}</h2>
            </div>
            <!-- メイン画像 -->
            <main class="main">
                <div class="product-container">
                    <div class="product-media">
                        <img id="mainImageId" class="product-main-image" src="{{ $mainImage?->image_path }}"
                            alt="{{ $product->name }}">
                    </div>
                    <!-- サブ画像 -->
                    <div class="product-sub-container">
                        @foreach ($images as $image)
                            <button type="button" class="product-thumb" data-image="{{ $image->image_path }}"
                                aria-label="画像を切り替える">
                                <img src="{{ $image->image_path }}" alt="{{ $product->name }}">
                            </button>
                        @endforeach
                    </div>
                    <div class="product-summary">
                        <!-- 商品名 -->
                        <h2>{{ $product->name }}</h2>
                        <!-- 値段 -->
                        <p class="product-price">¥{{ number_format($product->price) }}</p>
                        <!-- 商品説明 -->
                        <h3>{{ $product->description }}</h3>
                        <!-- 購入ボタンエリア -->
                        <div class="product-purchase">
                            <button class="btn-add-to-cart" type="button">カートに追加</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
