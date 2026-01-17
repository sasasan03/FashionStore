@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<script src="{{ asset('js/change-photo.js') }}" defer></script>
@endpush

@section('content')
<!-- 上部：画像と商品情報、下部：商品説明 -->
<div class="page">
    <div class="vertical-stack">
        <!-- 画像と商品情報 -->
        <div class="horizontal-stack">
            <div class="vertical-stack">
                <div>
                    <h1>{{ $product->name }}</h1>
                </div>
                <div class="horizontal-stack">
                    <!-- 画像とタイトルのrow -->
                    <div class="vertical-stack left-column-page-7">
                        <!-- メイン画像 -->
                        <img
                            id="mainImageId"
                            src="{{ $mainImage?->image_path }}"
                            alt="{{ $product->name }}">
                        <!-- サブ画像 -->
                        <div class="product-sub-images-horizontal">
                            @foreach ($images as $image)
                            <button
                                type="button"
                                class="product-thumb"
                                data-image="{{ $image->image_path }}"
                                aria-label="画像を切り替える">
                                <img src="{{ $image->image_path }}" alt="{{ $product->name }}">
                            </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- サイドメニュー -->
            <div class="right-column-page-3">
                <h1>sssss</h1>
            </div>
        </div>
        <!-- 商品説明 -->
        <div>

        </div>
    </div>
</div>

@endsection