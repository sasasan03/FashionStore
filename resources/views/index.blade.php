@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
@endpush

@section('content')
    <section class="hero hero--home">
        <div class="hero-bg" id="heroBg">
            <div class="hero-track" id="heroTrack">
                <img class="heroImg" src="/storage/home/photo.jpg" alt="" />
            </div>
        </div>
    </section>

    {{-- <section class="products">
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
    </section> --}}
@endsection

@push('scripts')
    <script src="{{ asset('js/change-photo.js') }}" defer></script>
@endpush
