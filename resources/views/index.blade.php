@extends('main')

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

        .product {
            border: 1px solid #eee;
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
        @for ($i = 0; $i < 3; $i++)
            <div class="product">
            <div class="product-image"></div>
            <div class="product-body">
                <div class="product-title">
                    商品タイトルが入ります<br>
                    商品説明が入ります
                </div>
                <div class="product-price">
                    ¥6,800
                </div>
            </div>
            </div>
            @endfor
    </section>

@endsection
