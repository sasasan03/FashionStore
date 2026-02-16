@extends('admin.layouts.main')

@section('title', 'APPAREL ADMIN | ダッシュボード')

@section('content')
    <section class="card">
        <header class="card__header">
            <h2 class="card__title">
                <i class="bi bi-layout-text-window"></i>
                ダッシュボード
            </h2>
            <p class="card__desc">管理画面の概要</p>
        </header>
        <div class="card__content">
            <div class="grid gap--lg">
                <div class="panel">
                    <p class="panel__label">商品登録</p>
                    <p class="panel__desc">新しい商品を登録します</p>
                    <a class="btn" href="{{ url('/admin/products/create') }}">商品登録へ</a>
                </div>
                <div class="panel">
                    <p class="panel__label">商品一覧</p>
                    <p class="panel__desc">準備中</p>
                    <a class="btn btn--outline" href="{{ url('/admin/products') }}">一覧へ</a>
                </div>
                <div class="panel">
                    <p class="panel__label">注文管理</p>
                    <p class="panel__desc">準備中</p>
                    <a class="btn btn--outline" href="{{ url('/admin/orders') }}">注文一覧へ</a>
                </div>
            </div>
        </div>
    </section>
@endsection
