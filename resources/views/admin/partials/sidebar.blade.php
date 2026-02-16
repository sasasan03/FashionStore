<aside class="admin-sidebar" id="adminSidebar" aria-label="管理メニュー">
    <div class="admin-sidebar__inner">
        <div class="admin-sidebar__top">
            <div class="admin-brand">
                <i class="bi bi-box-seam"></i>
                <span class="admin-brand__text">APPAREL ADMIN</span>
            </div>
            {{-- Mobile only: close row --}}
            <div class="admin-sidebar__mobileBar">
                <span class="admin-sidebar__mobileTitle">メニュー</span>
                <button class="icon-btn admin-sidebar__close" type="button" id="sidebarClose" aria-label="閉じる">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>

        <nav class="admin-nav" aria-label="サイドナビ">
            <a class="admin-nav__link {{ request()->is('admin/dashboard') ? 'is-active' : '' }}"
                href="{{ url('/admin/dashboard') }}">
                <i class="bi bi-layout-text-window"></i>
                <span>ダッシュボード</span>
            </a>
            <a class="admin-nav__link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'is-active' : '' }}"
                href="{{ url('/admin/products') }}">
                <i class="bi bi-box"></i>
                <span>商品一覧</span>
            </a>
            <a class="admin-nav__link {{ request()->is('admin/products/create') ? 'is-active' : '' }}"
                href="{{ url('/admin/products/create') }}">
                <i class="bi bi-plus-square"></i>
                <span>商品登録</span>
            </a>
            <a class="admin-nav__link {{ request()->is('admin/orders') || request()->is('admin/orders/*') ? 'is-active' : '' }}"
                href="{{ url('/admin/orders') }}">
                <i class="bi bi-cart"></i>
                <span>注文管理</span>
            </a>
            <a class="admin-nav__link {{ request()->is('admin/customers') || request()->is('admin/customers/*') ? 'is-active' : '' }}"
                href="{{ url('/admin/customers') }}">
                <i class="bi bi-people"></i>
                <span>顧客管理</span>
            </a>
            <a class="admin-nav__link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'is-active' : '' }}"
                href="{{ url('/admin/categories') }}">
                <i class="bi bi-tags"></i>
                <span>カテゴリ管理</span>
            </a>
            <a class="admin-nav__link {{ request()->is('admin/settings') || request()->is('admin/settings/*') ? 'is-active' : '' }}"
                href="{{ url('/admin/settings') }}">
                <i class="bi bi-gear"></i>
                <span>設定</span>
            </a>
        </nav>

        <div class="admin-sidebar__status">
            <div class="admin-statusCard">
                <p class="admin-statusCard__label">ストア公開状況</p>
                <div class="admin-statusCard__row">
                    <span class="admin-statusDot" aria-hidden="true"></span>
                    <span class="admin-statusCard__value">公開中</span>
                </div>
            </div>
        </div>
    </div>
</aside>
