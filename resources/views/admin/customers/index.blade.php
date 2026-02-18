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
                    <tr>
                        <td class="customers__muted">U-001</td>
                        <td>田中 太郎</td>
                        <td><span class="customers__tag customers__tag--home">自宅</span></td>
                        <td class="customers__muted">100-0001</td>
                        <td class="customers__muted">東京都千代田区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr>
                        <td class="customers__muted">U-001</td>
                        <td>田中 太郎</td>
                        <td><span class="customers__tag customers__tag--work">勤務先</span></td>
                        <td class="customers__muted">105-0001</td>
                        <td class="customers__muted">東京都港区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr>
                        <td class="customers__muted">U-002</td>
                        <td>佐藤 花子</td>
                        <td><span class="customers__tag customers__tag--home">自宅</span></td>
                        <td class="customers__muted">530-0001</td>
                        <td class="customers__muted">大阪府大阪市北区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr>
                        <td class="customers__muted">U-003</td>
                        <td>鈴木 一郎</td>
                        <td><span class="customers__tag customers__tag--home">自宅</span></td>
                        <td class="customers__muted">460-0001</td>
                        <td class="customers__muted">愛知県名古屋市中区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr>
                        <td class="customers__muted">U-004</td>
                        <td>高橋 美咲</td>
                        <td><span class="customers__tag customers__tag--home">自宅</span></td>
                        <td class="customers__muted">150-0001</td>
                        <td class="customers__muted">東京都渋谷区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr>
                        <td class="customers__muted">U-004</td>
                        <td>高橋 美咲（実家）</td>
                        <td><span class="customers__tag customers__tag--other">その他</span></td>
                        <td class="customers__muted">330-0001</td>
                        <td class="customers__muted">埼玉県さいたま市浦和区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr>
                        <td class="customers__muted">U-005</td>
                        <td>山本 大輔</td>
                        <td><span class="customers__tag customers__tag--work">勤務先</span></td>
                        <td class="customers__muted">650-0001</td>
                        <td class="customers__muted">兵庫県神戸市中央区</td>
                        <td class="customers__star">☆</td>
                        <td class="customers__more">…</td>
                    </tr>
                    <tr>
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
@endsection
