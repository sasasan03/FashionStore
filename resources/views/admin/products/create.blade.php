@extends('admin.layouts.main')

@section('title', 'APPAREL ADMIN | 商品登録')

@section('content')
    <form class="form" method="POST" action="#" enctype="multipart/form-data" id="productForm">
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
                            <label class="label" for="productName">商品名 <span class="req">*</span></label>
                            <input class="input" id="productName" name="name" type="text" placeholder="例: オーバーサイズ コットンTシャツ" required>
                        </div>

                        <div class="field">
                            <label class="label" for="price">価格（税込） <span class="req">*</span></label>
                            <div class="input-wrap">
                                <span class="input-prefix">¥</span>
                                <input class="input input--prefix" id="price" name="price" type="text" inputmode="numeric" placeholder="0" required>
                            </div>
                            <p class="help" id="priceFormatted" aria-live="polite"></p>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="description">商品説明 <span class="req">*</span></label>
                        <textarea class="textarea" id="description" name="description" placeholder="商品の特徴、素材、サイズ感などを詳しく記入してください..." rows="5" required></textarea>
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
                    <input class="hidden" id="mainImageInput" name="main_image" type="file" accept="image/*">

                    <div class="imgpick" id="mainPick">
                        <button class="dropzone" type="button" id="mainPickBtn" aria-controls="mainImageInput">
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
                            <button class="preview__remove" type="button" id="mainRemove" aria-label="メイン画像を削除">
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
                    <input class="hidden" id="subImagesInput" name="sub_images[]" type="file" accept="image/*" multiple>

                    <div class="thumbgrid" id="subGrid">
                        <button class="thumbgrid__add" type="button" id="subPickBtn" aria-controls="subImagesInput">
                            <i class="bi bi-plus-lg"></i>
                            <span>追加</span>
                        </button>
                    </div>

                    <p class="help" style="margin-top:12px;"><span id="subCount">0</span> / 10 枚</p>
                </div>
            </section>

            {{-- Submit --}}
            <div class="actions">
                <button class="btn btn--outline" type="button">下書き保存</button>
                <button class="btn" type="submit">商品を登録する</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    // Product form helpers
    (() => {
        const form = document.getElementById('productForm');
        if (!form) return;

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
    })();
</script>
@endpush
