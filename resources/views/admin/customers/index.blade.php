@extends('admin.layouts.main')

@section('title', 'APPAREL ADMIN | 顧客管理')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/customer-management.css') }}">
@endpush

@section('content')
    <div class="customers">
        <div>
            <h1 class="customers__title">顧客管理</h1>
            <p class="customers__subtitle">顧客の住所情報を一覧・検索・登録・編集します</p>
        </div>

        <section class="customers__stats">
            <div class="customers__stat">
                <div class="customers__stat-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div>
                    <div class="customers__stat-label">全住所</div>
                    <div class="customers__stat-value">8</div>
                </div>
            </div>
            <div class="customers__stat">
                <div class="customers__stat-icon">
                    <i class="bi bi-star"></i>
                </div>
                <div>
                    <div class="customers__stat-label">デフォルト</div>
                    <div class="customers__stat-value">6</div>
                </div>
            </div>
            <div class="customers__stat">
                <div class="customers__stat-icon">
                    <i class="bi bi-house"></i>
                </div>
                <div>
                    <div class="customers__stat-label">自宅</div>
                    <div class="customers__stat-value">5</div>
                </div>
            </div>
            <div class="customers__stat">
                <div class="customers__stat-icon">
                    <i class="bi bi-building"></i>
                </div>
                <div>
                    <div class="customers__stat-label">勤務先</div>
                    <div class="customers__stat-value">2</div>
                </div>
            </div>
        </section>

        <div class="customers__actions">
            <div class="customers__filters">
                <input class="customers__input" type="search" placeholder="宛名・住所・電話番号で検索..." aria-label="検索">
                <select class="customers__select" aria-label="住所種別">
                    <option>すべて</option>
                    <option>自宅</option>
                    <option>勤務先</option>
                    <option>その他</option>
                </select>
            </div>
            <a class="customers__btn" href="#">
                <i class="bi bi-plus-lg"></i>
                新規登録
            </a>
        </div>

        <div class="customers__table">
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>宛名</th>
                        <th>住所種別</th>
                        <th>郵便番号</th>
                        <th>住所</th>
                        <th>デフォルト</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="customers__row" data-user="田中 太郎" data-user-id="U-001" data-type="自宅" data-phone="03-1234-5678"
                        data-postal="100-0001" data-address="東京都千代田区" data-address2="千代田1-1-1"
                        data-building="パレスマンション 301" data-default="true">
                        <td class="customers__muted">U-001</td>
                        <td>田中 太郎</td>
                        <td><span class="customers__tag customers__tag--home">自宅</span></td>
                        <td class="customers__muted">100-0001</td>
                        <td class="customers__muted">東京都千代田区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr class="customers__row" data-user="田中 太郎" data-user-id="U-001" data-type="勤務先" data-phone="03-2345-6789"
                        data-postal="105-0001" data-address="東京都港区" data-address2="港1-2-3"
                        data-building="港ビル 12F" data-default="false">
                        <td class="customers__muted">U-001</td>
                        <td>田中 太郎</td>
                        <td><span class="customers__tag customers__tag--work">勤務先</span></td>
                        <td class="customers__muted">105-0001</td>
                        <td class="customers__muted">東京都港区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr class="customers__row" data-user="佐藤 花子" data-user-id="U-002" data-type="自宅" data-phone="06-2345-6789"
                        data-postal="530-0001" data-address="大阪府大阪市北区" data-address2="梅田2-3-4"
                        data-building="グランドタワー 9F" data-default="true">
                        <td class="customers__muted">U-002</td>
                        <td>佐藤 花子</td>
                        <td><span class="customers__tag customers__tag--home">自宅</span></td>
                        <td class="customers__muted">530-0001</td>
                        <td class="customers__muted">大阪府大阪市北区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr class="customers__row" data-user="鈴木 一郎" data-user-id="U-003" data-type="自宅" data-phone="052-123-4567"
                        data-postal="460-0001" data-address="愛知県名古屋市中区" data-address2="栄3-4-5"
                        data-building="セントラルビル 3F" data-default="true">
                        <td class="customers__muted">U-003</td>
                        <td>鈴木 一郎</td>
                        <td><span class="customers__tag customers__tag--home">自宅</span></td>
                        <td class="customers__muted">460-0001</td>
                        <td class="customers__muted">愛知県名古屋市中区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr class="customers__row" data-user="高橋 美咲" data-user-id="U-004" data-type="自宅" data-phone="03-4567-8901"
                        data-postal="150-0001" data-address="東京都渋谷区" data-address2="渋谷5-6-7"
                        data-building="ハイツ渋谷 2F" data-default="true">
                        <td class="customers__muted">U-004</td>
                        <td>高橋 美咲</td>
                        <td><span class="customers__tag customers__tag--home">自宅</span></td>
                        <td class="customers__muted">150-0001</td>
                        <td class="customers__muted">東京都渋谷区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr class="customers__row" data-user="高橋 美咲（実家）" data-user-id="U-004" data-type="その他" data-phone="048-789-0123"
                        data-postal="330-0001" data-address="埼玉県さいたま市浦和区" data-address2="浦和1-2-3"
                        data-building="さくらハイツ 101" data-default="false">
                        <td class="customers__muted">U-004</td>
                        <td>高橋 美咲（実家）</td>
                        <td><span class="customers__tag customers__tag--other">その他</span></td>
                        <td class="customers__muted">330-0001</td>
                        <td class="customers__muted">埼玉県さいたま市浦和区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr class="customers__row" data-user="山本 大輔" data-user-id="U-005" data-type="勤務先" data-phone="078-123-4567"
                        data-postal="650-0001" data-address="兵庫県神戸市中央区" data-address2="三宮2-3-4"
                        data-building="コーストビル 8F" data-default="true">
                        <td class="customers__muted">U-005</td>
                        <td>山本 大輔</td>
                        <td><span class="customers__tag customers__tag--work">勤務先</span></td>
                        <td class="customers__muted">650-0001</td>
                        <td class="customers__muted">兵庫県神戸市中央区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr class="customers__row" data-user="中村 さくら" data-user-id="U-006" data-type="自宅" data-phone="092-123-4567"
                        data-postal="812-0001" data-address="福岡県福岡市博多区" data-address2="博多1-1-1"
                        data-building="グリーンハイツ 405" data-default="true">
                        <td class="customers__muted">U-006</td>
                        <td>中村 さくら</td>
                        <td><span class="customers__tag customers__tag--home">自宅</span></td>
                        <td class="customers__muted">812-0001</td>
                        <td class="customers__muted">福岡県福岡市博多区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="customers__footer">8件の住所を表示中</div>
    </div>

    <aside class="customers__drawer" id="customerDrawer" aria-hidden="true">
        <div class="customers__drawer-header">
            <div>
                <h2 class="customers__drawer-name" id="drawerName">田中 太郎</h2>
                <div class="customers__drawer-tags">
                    <span class="customers__tag customers__tag--home" id="drawerType">自宅</span>
                    <span class="customers__drawer-badge" id="drawerDefault">☆ デフォルト</span>
                </div>
            </div>
            <div class="customers__drawer-actions">
                <button class="customers__drawer-icon" type="button" aria-label="編集">
                    <i class="bi bi-pencil"></i>
                </button>
                <button class="customers__drawer-icon" type="button" id="drawerClose" aria-label="閉じる">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>

        <div class="customers__drawer-section">
            <div class="customers__drawer-row">
                <span class="customers__drawer-label"><i class="bi bi-hash"></i> User ID</span>
                <span class="customers__drawer-value" id="drawerUserId">U-001</span>
            </div>
            <div class="customers__drawer-row">
                <span class="customers__drawer-label"><i class="bi bi-person"></i> 宛名</span>
                <span class="customers__drawer-value" id="drawerUser">田中 太郎</span>
            </div>
            <div class="customers__drawer-row">
                <span class="customers__drawer-label"><i class="bi bi-telephone"></i> 電話番号</span>
                <span class="customers__drawer-value" id="drawerPhone">03-1234-5678</span>
            </div>
        </div>

        <div class="customers__drawer-section">
            <div class="customers__drawer-title"><i class="bi bi-geo-alt"></i> 住所</div>
            <div class="customers__drawer-card" id="drawerAddress">
                〒100-0001<br>東京都千代田区<br>千代田1-1-1<br>パレスマンション 301
            </div>
        </div>

        <div class="customers__drawer-section">
            <div class="customers__drawer-title"><i class="bi bi-house"></i> 住所種別</div>
            <div class="customers__drawer-value" id="drawerTypeText">自宅</div>
        </div>
    </aside>

    <div class="customers__drawer-overlay" id="drawerOverlay" aria-hidden="true"></div>
@endsection

@push('scripts')
<script>
    (() => {
        const drawer = document.getElementById('customerDrawer');
        const overlay = document.getElementById('drawerOverlay');
        const closeBtn = document.getElementById('drawerClose');
        const rows = document.querySelectorAll('.customers__row');

        const nameEl = document.getElementById('drawerName');
        const userIdEl = document.getElementById('drawerUserId');
        const userEl = document.getElementById('drawerUser');
        const phoneEl = document.getElementById('drawerPhone');
        const typeBadgeEl = document.getElementById('drawerType');
        const typeTextEl = document.getElementById('drawerTypeText');
        const defaultEl = document.getElementById('drawerDefault');
        const addressEl = document.getElementById('drawerAddress');

        const typeClassMap = {
            '自宅': 'customers__tag--home',
            '勤務先': 'customers__tag--work',
            'その他': 'customers__tag--other'
        };

        const openDrawer = (row) => {
            if (!drawer) return;
            const data = row.dataset;
            nameEl.textContent = data.user || '';
            userIdEl.textContent = data.userId || '';
            userEl.textContent = data.user || '';
            phoneEl.textContent = data.phone || '';
            typeTextEl.textContent = data.type || '';

            const typeClass = typeClassMap[data.type] || 'customers__tag--other';
            typeBadgeEl.className = `customers__tag ${typeClass}`;
            typeBadgeEl.textContent = data.type || '';

            if (data.default === 'true') {
                defaultEl.style.display = 'inline-flex';
            } else {
                defaultEl.style.display = 'none';
            }

            const lines = [
                `〒${data.postal || ''}`,
                data.address || '',
                data.address2 || '',
                data.building || ''
            ].filter(Boolean);
            addressEl.innerHTML = lines.join('<br>');

            drawer.classList.add('is-open');
            drawer.setAttribute('aria-hidden', 'false');
            overlay.classList.add('is-open');
            overlay.setAttribute('aria-hidden', 'false');
        };

        const closeDrawer = () => {
            drawer?.classList.remove('is-open');
            drawer?.setAttribute('aria-hidden', 'true');
            overlay?.classList.remove('is-open');
            overlay?.setAttribute('aria-hidden', 'true');
        };

        rows.forEach((row) => {
            row.addEventListener('click', () => openDrawer(row));
        });

        closeBtn?.addEventListener('click', closeDrawer);
        overlay?.addEventListener('click', closeDrawer);
    })();
</script>
@endpush
