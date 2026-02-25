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
            <button class="categories__btn" type="button" id="categoryCreateBtn">
                <i class="bi bi-plus-lg"></i>
                カテゴリー作成
            </button>
        </div>

        {{--  --}}
        <div class="categories__meta">
            <span>全 {{ $nameCount }} 件</span>
            <span>ドラッグ & ドロップで並び替えができます</span>
        </div>

        {{-- カテゴリーリスト --}}
        <div class="categories__list" id="categoryList">
            {{-- リスト内要素 --}}
            @foreach ($names as $name)
                <div class="category-card" draggable="true">
                    <div class="category-card__top">
                        <div class="category-card__drag">⋮⋮</div>
                        <div>
                            <h3 class="category-card__title">{{ $name }}</h3>
                        </div>
                        <span class="category-card__pill">有効</span>
                    </div>
                    <div class="category-card__divider"></div>
                    <div class="category-card__bottom">
                        <div class="category-card__actions">
                            <a class="category-card__action" href="#"><i class="bi bi-pencil"></i>編集</a>
                            <a class="category-card__action" href="#"><i class="bi bi-trash"></i>削除</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- カテゴリーモーダル --}}
    <div class="category-modal" id="categoryModal" aria-hidden="true" role="dialog" aria-modal="true">
        <div class="category-modal__overlay" id="categoryModalOverlay"></div>
        <div class="category-modal__panel" role="document">
            <div class="category-modal__header">
                <div>
                    <h2 class="category-modal__title">カテゴリー作成</h2>
                    <p class="category-modal__subtitle">新しいカテゴリーを作成します</p>
                </div>
                <button class="category-modal__close" type="button" id="categoryModalClose" aria-label="閉じる">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <form class="category-form">
                <div class="category-form__field">
                    <label class="category-form__label">カテゴリー名 <span class="category-form__req">*</span></label>
                    <input class="category-form__input" type="text" placeholder="トップス、ボトムスなど">
                </div>

                <div class="category-form__field">
                    <label class="category-form__label">説明</label>
                    <textarea class="category-form__textarea" rows="3" placeholder="カテゴリーの説明を入力"></textarea>
                </div>

                <div class="category-form__field">
                    <label class="category-form__label">表示順序</label>
                    <input class="category-form__input" type="number" value="0">
                    <p class="category-form__help">数値が小さいほど上位に表示されます</p>
                </div>

                <div class="category-form__field category-form__toggle">
                    <div>
                        <div class="category-form__toggle-title">有効化</div>
                        <div class="category-form__help">無効にすると表示されなくなります</div>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch__slider"></span>
                    </label>
                </div>

                <div class="category-form__actions">
                    <button class="category-form__btn category-form__btn--ghost" type="button"
                        id="categoryModalCancel">キャンセル</button>
                    <button class="category-form__btn" type="submit">作成</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/admin/category-management.js') }}"></script>
@endpush
