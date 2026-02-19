@extends('admin.layouts.main')

@section('title', 'APPAREL ADMIN | カテゴリ管理')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/category-management.css') }}">
@endpush

@section('content')
    <div class="categories">
        <div class="categories__header">
            <div>
                <h1 class="categories__title">カテゴリー管理</h1>
                <p class="categories__subtitle">アパレルECサイトの商品カテゴリーを管理します</p>
            </div>
            <a class="categories__btn" href="#">
                <i class="bi bi-plus-lg"></i>
                カテゴリー作成
            </a>
        </div>

        <div class="categories__meta">
            <span>全 5 件</span>
            <span>ドラッグ & ドロップで並び替えができます</span>
        </div>

        <div class="categories__list" id="categoryList">
            <div class="category-card" draggable="true">
                <div class="category-card__top">
                    <div class="category-card__drag">⋮⋮</div>
                    <div>
                        <h3 class="category-card__title">アウター</h3>
                        <div class="category-card__desc">ジャケット、コート、カーディガンなど</div>
                    </div>
                    <span class="category-card__pill">有効</span>
                </div>
                <div class="category-card__divider"></div>
                <div class="category-card__bottom">
                    <span>表示順序: 0</span>
                    <div class="category-card__actions">
                        <a class="category-card__action" href="#"><i class="bi bi-pencil"></i>編集</a>
                        <a class="category-card__action" href="#"><i class="bi bi-trash"></i>削除</a>
                    </div>
                </div>
            </div>

            <div class="category-card" draggable="true">
                <div class="category-card__top">
                    <div class="category-card__drag">⋮⋮</div>
                    <div>
                        <h3 class="category-card__title">トップス</h3>
                        <div class="category-card__desc">Tシャツ、シャツ、ブラウス、セーターなど</div>
                    </div>
                    <span class="category-card__pill">有効</span>
                </div>
                <div class="category-card__divider"></div>
                <div class="category-card__bottom">
                    <span>表示順序: 1</span>
                    <div class="category-card__actions">
                        <a class="category-card__action" href="#"><i class="bi bi-pencil"></i>編集</a>
                        <a class="category-card__action" href="#"><i class="bi bi-trash"></i>削除</a>
                    </div>
                </div>
            </div>

            <div class="category-card" draggable="true">
                <div class="category-card__top">
                    <div class="category-card__drag">⋮⋮</div>
                    <div>
                        <h3 class="category-card__title">ボトムス</h3>
                        <div class="category-card__desc">パンツ、デニム、スカートなど</div>
                    </div>
                    <span class="category-card__pill">有効</span>
                </div>
                <div class="category-card__divider"></div>
                <div class="category-card__bottom">
                    <span>表示順序: 2</span>
                    <div class="category-card__actions">
                        <a class="category-card__action" href="#"><i class="bi bi-pencil"></i>編集</a>
                        <a class="category-card__action" href="#"><i class="bi bi-trash"></i>削除</a>
                    </div>
                </div>
            </div>

            <div class="category-card" draggable="true">
                <div class="category-card__top">
                    <div class="category-card__drag">⋮⋮</div>
                    <div>
                        <h3 class="category-card__title">アクセサリー</h3>
                        <div class="category-card__desc">バッグ、帽子、アクセサリーなど</div>
                    </div>
                    <span class="category-card__pill">有効</span>
                </div>
                <div class="category-card__divider"></div>
                <div class="category-card__bottom">
                    <span>表示順序: 3</span>
                    <div class="category-card__actions">
                        <a class="category-card__action" href="#"><i class="bi bi-pencil"></i>編集</a>
                        <a class="category-card__action" href="#"><i class="bi bi-trash"></i>削除</a>
                    </div>
                </div>
            </div>

            <div class="category-card" draggable="true">
                <div class="category-card__top">
                    <div class="category-card__drag">⋮⋮</div>
                    <div>
                        <h3 class="category-card__title">シューズ</h3>
                        <div class="category-card__desc">スニーカー、ブーツ、サンダルなど</div>
                    </div>
                    <span class="category-card__pill">有効</span>
                </div>
                <div class="category-card__divider"></div>
                <div class="category-card__bottom">
                    <span>表示順序: 4</span>
                    <div class="category-card__actions">
                        <a class="category-card__action" href="#"><i class="bi bi-pencil"></i>編集</a>
                        <a class="category-card__action" href="#"><i class="bi bi-trash"></i>削除</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/admin/category-management.js') }}"></script>
@endpush
