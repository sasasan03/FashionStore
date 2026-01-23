@extends('layouts.main')

@push('styles')
    <style>
        /* ===== product grid ===== */
        .products {
            max-width: 1200px;
            margin: 15px auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            padding: 0 20px;
        }

        .product-image {
            width: 100%;
            aspect-ratio: 1 / 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fafafa;
        }

        .product-image img {
            width: 80%;
            height: 80%;
            object-fit: contain;
            display: block;
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

        @media (max-width: 768px) {
            .products {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <script src="{{ asset('js/change-photo.js') }}" defer></script>
@endpush

@section('content')
    </section>

    <section class="products">
        @foreach ($products as $product)
            <a class="product" href="{{ route('products.show', $product->slug) }}">
                <div class="product-image">
                    <img src="{{ $product->mainImage?->image_path }}" alt="{{ $product->name }}">
                </div>

                <div class="product-body">
                    <div class="product-title">
                        {{ $product->name }}
                    </div>

                    <div class="product-price">
                        ¥{{ number_format($product->price) }}
                    </div>
                </div>
            </a>
        @endforeach
    </section>
@endsection
