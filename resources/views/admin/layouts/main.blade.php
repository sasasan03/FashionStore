<!doctype html>
<html lang="ja">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield('title', 'APPAREL ADMIN | 商品管理')</title>

        {{-- Icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

        {{-- Admin CSS --}}
        <link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">

        @stack('styles')
    </head>

    <body class="admin">
        <div class="admin-shell" id="adminShell">
            {{-- Sidebar --}}
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
                            <button class="icon-btn admin-sidebar__close" type="button" id="sidebarClose"
                                aria-label="閉じる">
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
                        <a class="admin-nav__link {{ request()->is('admin/analytics') || request()->is('admin/analytics/*') ? 'is-active' : '' }}"
                            href="{{ url('/admin/analytics') }}">
                            <i class="bi bi-bar-chart"></i>
                            <span>売上分析</span>
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

            {{-- Overlay (mobile) --}}
            <div class="admin-overlay" id="adminOverlay" aria-hidden="true"></div>

            <div class="admin-main">
                {{-- Header --}}
                <header class="admin-header">
                    <div class="admin-header__inner">
                        {{-- Mobile menu button --}}
                        <button class="icon-btn admin-menu-btn" type="button" id="menuToggle" aria-label="メニューを開く"
                            aria-expanded="false" aria-controls="adminSidebar">
                            <i class="bi bi-list"></i>
                        </button>

                        <div class="admin-header__brand">
                            <i class="bi bi-box-seam"></i>
                            <span class="admin-header__brandText">APPAREL ADMIN</span>
                        </div>

                        <div class="admin-header__spacer"></div>

                        {{-- Desktop nav --}}
                        <nav class="admin-topnav" aria-label="上部ナビゲーション">
                            <a class="topnav-link" href="#">ダッシュボード</a>
                            <a class="topnav-link is-active" href="#">商品管理</a>
                            <a class="topnav-link" href="#">注文管理</a>
                            <a class="topnav-link" href="#">顧客管理</a>
                            <a class="topnav-link" href="#">設定</a>
                        </nav>

                        <div class="admin-actions">
                            {{-- Bell --}}
                            <button class="icon-btn" type="button" aria-label="通知">
                                <i class="bi bi-bell"></i>
                                <span class="dot" aria-hidden="true"></span>
                            </button>

                            {{-- User dropdown --}}
                            <div class="dropdown" data-dropdown>
                                <button class="icon-btn avatar-btn" type="button" data-dropdown-trigger
                                    aria-haspopup="menu" aria-expanded="false">
                                    <span class="avatar">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <span class="sr-only">ユーザーメニュー</span>
                                </button>

                                <div class="dropdown-menu" data-dropdown-menu role="menu" aria-label="管理者アカウント">
                                    <div class="dropdown-label">管理者アカウント</div>
                                    <div class="dropdown-sep"></div>
                                    <a class="dropdown-item" href="#" role="menuitem">プロフィール</a>
                                    <a class="dropdown-item" href="#" role="menuitem">アカウント設定</a>
                                    <div class="dropdown-sep"></div>
                                    <form method="POST" action="#" style="margin:0;">
                                        @csrf
                                        <button class="dropdown-item is-danger" type="submit"
                                            role="menuitem">ログアウト</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                {{-- Page content (product form etc.) --}}
                <main class="admin-content">
                    @hasSection('content')
                        @yield('content')
                    @else
                        {{-- Default: Product create form (temporary fallback) --}}
                        <form class="form" method="POST" action="#" enctype="multipart/form-data"
                            id="productForm">
                            @csrf

                            <div class="stack stack--lg">
                                {{-- Product Basic Info --}}
                                <section class="card">
                                    <header class="card__header">
                                        <h2 class="card__title">
                                            <i class="bi bi-box-seam"></i>
                                            商品情報
                                        </h2>
                                        <p class="card__desc">商品名、価格、説明を入力してください</p>
                                    </header>

                                    <div class="card__content">
                                        <div class="grid gap--lg">
                                            <div class="field">
                                                <label class="label" for="productName">商品名 <span
                                                        class="req">*</span></label>
                                                <input class="input" id="productName" name="name" type="text"
                                                    placeholder="例: オーバーサイズ コットンTシャツ" required>
                                            </div>

                                            <div class="field">
                                                <label class="label" for="price">価格（税込） <span
                                                        class="req">*</span></label>
                                                <div class="input-wrap">
                                                    <span class="input-prefix">¥</span>
                                                    <input class="input input--prefix" id="price" name="price"
                                                        type="text" inputmode="numeric" placeholder="0" required>
                                                </div>
                                                <p class="help" id="priceFormatted" aria-live="polite"></p>
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="label" for="description">商品説明 <span
                                                    class="req">*</span></label>
                                            <textarea class="textarea" id="description" name="description" placeholder="商品の特徴、素材、サイズ感などを詳しく記入してください..."
                                                rows="5" required></textarea>
                                            <p class="help help--right"><span id="descCount">0</span> 文字</p>
                                        </div>
                                    </div>
                                </section>

                                {{-- Main Image --}}
                                <section class="card">
                                    <header class="card__header">
                                        <h2 class="card__title">
                                            <i class="bi bi-image"></i>
                                            メイン画像
                                        </h2>
                                        <p class="card__desc">商品一覧で表示されるメイン画像をアップロードしてください</p>
                                    </header>

                                    <div class="card__content">
                                        <input class="hidden" id="mainImageInput" name="main_image" type="file"
                                            accept="image/*">

                                        <div class="imgpick" id="mainPick">
                                            <button class="dropzone" type="button" id="mainPickBtn"
                                                aria-controls="mainImageInput">
                                                <i class="bi bi-upload"></i>
                                                <div class="dropzone__text">
                                                    <p class="dropzone__title">クリックして画像を選択</p>
                                                    <p class="dropzone__sub">PNG, JPG, WebP</p>
                                                </div>
                                            </button>

                                            <div class="preview" id="mainPreview" hidden>
                                                <div class="preview__imgWrap">
                                                    <img id="mainPreviewImg" alt="メイン画像プレビュー">
                                                </div>
                                                <button class="preview__remove" type="button" id="mainRemove"
                                                    aria-label="メイン画像を削除">
                                                    <i class="bi bi-x"></i>
                                                </button>
                                                <p class="preview__name" id="mainFileName"></p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                {{-- Sub Images --}}
                                <section class="card">
                                    <header class="card__header">
                                        <h2 class="card__title">
                                            <i class="bi bi-images"></i>
                                            サブ画像
                                        </h2>
                                        <p class="card__desc">商品の詳細ページで表示されるサブ画像をアップロードしてください（最大10枚）</p>
                                    </header>

                                    <div class="card__content">
                                        <input class="hidden" id="subImagesInput" name="sub_images[]" type="file"
                                            accept="image/*" multiple>

                                        <div class="thumbgrid" id="subGrid">
                                            <button class="thumbgrid__add" type="button" id="subPickBtn"
                                                aria-controls="subImagesInput">
                                                <i class="bi bi-plus-lg"></i>
                                                <span>追加</span>
                                            </button>
                                        </div>

                                        <p class="help" style="margin-top:12px;"><span id="subCount">0</span> / 10
                                            枚</p>
                                    </div>
                                </section>

                                {{-- Submit --}}
                                <div class="actions">
                                    <button class="btn btn--outline" type="button">下書き保存</button>
                                    <button class="btn" type="submit">商品を登録する</button>
                                </div>
                            </div>
                        </form>
                    @endif
                </main>
            </div>
        </div>

        {{-- Admin JS --}}
        <script>
            // Sidebar toggle (mobile)
            (() => {
                const shell = document.getElementById('adminShell');
                const toggle = document.getElementById('menuToggle');
                const overlay = document.getElementById('adminOverlay');
                const closeBtn = document.getElementById('sidebarClose');
                const sidebar = document.getElementById('adminSidebar');
                const mq = window.matchMedia('(min-width: 1140px)');

                if (!shell || !toggle) return;

                const closeSidebar = () => {
                    shell.classList.remove('is-sidebar-open');
                    toggle.setAttribute('aria-expanded', 'false');
                };

                const openSidebar = () => {
                    shell.classList.add('is-sidebar-open');
                    toggle.setAttribute('aria-expanded', 'true');
                };

                toggle.addEventListener('click', () => {
                    if (mq.matches) return; // desktopではトグル不要（常時表示）
                    shell.classList.contains('is-sidebar-open') ? closeSidebar() : openSidebar();
                });

                overlay?.addEventListener('click', closeSidebar);
                closeBtn?.addEventListener('click', closeSidebar);

                // Close on nav click (mobile)
                sidebar?.addEventListener('click', (e) => {
                    if (mq.matches) return; // desktop
                    const target = e.target;
                    if (!(target instanceof Element)) return;
                    const link = target.closest('a');
                    if (link) closeSidebar();
                });

                window.addEventListener('resize', () => {
                    if (mq.matches) closeSidebar();
                });

                // Dropdown
                document.querySelectorAll('[data-dropdown]').forEach((root) => {
                    const btn = root.querySelector('[data-dropdown-trigger]');
                    const menu = root.querySelector('[data-dropdown-menu]');
                    if (!btn || !menu) return;

                    const close = () => {
                        root.classList.remove('is-open');
                        btn.setAttribute('aria-expanded', 'false');
                    };

                    const open = () => {
                        root.classList.add('is-open');
                        btn.setAttribute('aria-expanded', 'true');
                    };

                    btn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        root.classList.contains('is-open') ? close() : open();
                    });

                    document.addEventListener('click', (e) => {
                        if (!root.classList.contains('is-open')) return;
                        if (root.contains(e.target)) return;
                        close();
                    });

                    document.addEventListener('keydown', (e) => {
                        if (e.key === 'Escape') close();
                    });
                });

                // Product form helpers (only if present)
                const form = document.getElementById('productForm');
                if (form) {
                    // Price formatting
                    const priceInput = document.getElementById('price');
                    const priceFormatted = document.getElementById('priceFormatted');
                    const normalizeDigits = (v) => String(v || '').replace(/[^\d]/g, '');

                    const renderPrice = () => {
                        const n = normalizeDigits(priceInput?.value);
                        if (priceInput) priceInput.value = n;
                        if (!priceFormatted) return;
                        if (!n) {
                            priceFormatted.textContent = '';
                            return;
                        }
                        const num = Number(n);
                        priceFormatted.textContent = Number.isFinite(num) ? `¥${num.toLocaleString()}` : '';
                    };

                    priceInput?.addEventListener('input', renderPrice);

                    // Description count
                    const desc = document.getElementById('description');
                    const descCount = document.getElementById('descCount');
                    const renderCount = () => {
                        if (!desc || !descCount) return;
                        descCount.textContent = String(desc.value.length);
                    };
                    desc?.addEventListener('input', renderCount);
                    renderCount();

                    // Main image
                    const mainInput = document.getElementById('mainImageInput');
                    const mainPickBtn = document.getElementById('mainPickBtn');
                    const mainPreview = document.getElementById('mainPreview');
                    const mainImg = document.getElementById('mainPreviewImg');
                    const mainName = document.getElementById('mainFileName');
                    const mainRemove = document.getElementById('mainRemove');

                    let mainObjectUrl = null;
                    const clearMain = () => {
                        if (mainObjectUrl) {
                            URL.revokeObjectURL(mainObjectUrl);
                            mainObjectUrl = null;
                        }
                        if (mainInput) mainInput.value = '';
                        if (mainPreview) mainPreview.hidden = true;
                        if (mainPickBtn) mainPickBtn.hidden = false;
                        if (mainImg) mainImg.removeAttribute('src');
                        if (mainName) mainName.textContent = '';
                    };

                    mainPickBtn?.addEventListener('click', () => mainInput?.click());
                    mainInput?.addEventListener('change', () => {
                        const file = mainInput.files?.[0];
                        if (!file) return;
                        clearMain();
                        mainObjectUrl = URL.createObjectURL(file);
                        if (mainImg) mainImg.src = mainObjectUrl;
                        if (mainName) mainName.textContent = file.name;
                        if (mainPreview) mainPreview.hidden = false;
                        if (mainPickBtn) mainPickBtn.hidden = true;
                    });
                    mainRemove?.addEventListener('click', clearMain);

                    const subInput = document.getElementById('subImagesInput');
                    const subPickBtn = document.getElementById('subPickBtn');
                    const subGrid = document.getElementById('subGrid');
                    const subCount = document.getElementById('subCount');

                    const subFiles = [];
                    const uid = () => (crypto?.randomUUID ? crypto.randomUUID() : String(Date.now() + Math.random()));

                    const renderSubCount = () => {
                        if (subCount) subCount.textContent = String(subFiles.length);
                        if (subPickBtn) subPickBtn.disabled = subFiles.length >= 10;
                    };

                    const rebuildSubInput = () => {
                        if (!subInput) return;
                        const dt = new DataTransfer();
                        subFiles.forEach((f) => dt.items.add(f.file));
                        subInput.files = dt.files;
                    };

                    const addThumb = (obj) => {
                        if (!subGrid) return;
                        const wrap = document.createElement('div');
                        wrap.className = 'thumb';
                        wrap.dataset.id = obj.id;

                        wrap.innerHTML = `
                          <div class="thumb__imgWrap">
                            <img alt="サブ画像プレビュー" src="${obj.url}">
                          </div>
                          <button type="button" class="thumb__remove" aria-label="サブ画像を削除">
                            <i class="bi bi-x"></i>
                          </button>
                        `;

                        const removeBtn = wrap.querySelector('.thumb__remove');
                        removeBtn.addEventListener('click', () => {
                            const idx = subFiles.findIndex((x) => x.id === obj.id);
                            if (idx >= 0) {
                                URL.revokeObjectURL(subFiles[idx].url);
                                subFiles.splice(idx, 1);
                                wrap.remove();
                                rebuildSubInput();
                                renderSubCount();
                            }
                        });

                        // insert before add button
                        const addBtn = subGrid.querySelector('.thumbgrid__add');
                        subGrid.insertBefore(wrap, addBtn);
                    };

                    subPickBtn?.addEventListener('click', () => subInput?.click());
                    subInput?.addEventListener('change', () => {
                        const files = Array.from(subInput.files || []);
                        if (!files.length) return;

                        const remaining = Math.max(0, 10 - subFiles.length);
                        files.slice(0, remaining).forEach((file) => {
                            const obj = {
                                id: uid(),
                                file,
                                url: URL.createObjectURL(file)
                            };
                            subFiles.push(obj);
                            addThumb(obj);
                        });

                        rebuildSubInput();
                        renderSubCount();
                    });

                    renderSubCount();
                    renderPrice();
                }
            })();
        </script>

        @stack('scripts')
    </body>

</html>
