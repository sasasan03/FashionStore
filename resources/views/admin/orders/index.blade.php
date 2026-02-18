@extends('admin.layouts.main')

@section('title', 'APPAREL ADMIN | 注文管理')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/order-management.css') }}">
@endpush

@section('content')
    <div class="orders">
        <div class="orders__top">
            <div class="orders__brand">
                <i class="bi bi-box-seam"></i>
                <span>NOIR</span>
            </div>
            <nav class="orders__tabs" aria-label="管理メニュー">
                <a class="orders__tab is-active" href="{{ url('/admin/orders') }}">ORDERS</a>
                <a class="orders__tab" href="{{ url('/admin/products') }}">PRODUCTS</a>
                <a class="orders__tab" href="{{ url('/admin/customers') }}">CUSTOMERS</a>
            </nav>
        </div>

        <section class="orders__stats">
            <div class="orders__stat">
                <div class="orders__stat-label">TOTAL ORDERS</div>
                <div class="orders__stat-value">1,284</div>
                <div class="orders__stat-sub">Today +12</div>
            </div>
            <div class="orders__stat">
                <div class="orders__stat-label">PROCESSING</div>
                <div class="orders__stat-value">43</div>
                <div class="orders__stat-sub">Avg 1.2 days</div>
            </div>
            <div class="orders__stat">
                <div class="orders__stat-label">SHIPPED</div>
                <div class="orders__stat-value">128</div>
                <div class="orders__stat-sub">In transit</div>
            </div>
            <div class="orders__stat">
                <div class="orders__stat-label">DELIVERED</div>
                <div class="orders__stat-value">1,113</div>
                <div class="orders__stat-sub">This month</div>
            </div>
        </section>

        <div class="orders__list-header">
            <div class="orders__list-title">
                <span>ORDERS</span>
                <span class="orders__list-count">10 results</span>
            </div>
            <div class="orders__filters">
                <input class="orders__input" type="search" placeholder="Search..." aria-label="検索">
                <select class="orders__select" aria-label="フィルタ">
                    <option>All</option>
                    <option>Processing</option>
                    <option>Shipped</option>
                    <option>Delivered</option>
                    <option>Cancelled</option>
                </select>
            </div>
        </div>

        <div class="orders__table">
            <table>
                <thead>
                    <tr>
                        <th>ORDER NO</th>
                        <th>USER ID</th>
                        <th>STATUS</th>
                        <th class="orders__amount">SUBTOTAL</th>
                        <th class="orders__amount">SHIPPING</th>
                        <th class="orders__amount">DISCOUNT</th>
                        <th class="orders__amount">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ORD-7291</td>
                        <td class="orders__muted">USR-0041</td>
                        <td><span class="orders__status orders__status--processing">PROCESSING</span></td>
                        <td class="orders__amount">¥48,000 <span class="orders__muted">(48,000×1)</span></td>
                        <td class="orders__amount">¥800</td>
                        <td class="orders__amount">—</td>
                        <td class="orders__amount">¥48,800</td>
                    </tr>
                    <tr>
                        <td>ORD-7290</td>
                        <td class="orders__muted">USR-0123</td>
                        <td><span class="orders__status orders__status--shipped">SHIPPED</span></td>
                        <td class="orders__amount">¥36,000 <span class="orders__muted">(18,000×2)</span></td>
                        <td class="orders__amount">—</td>
                        <td class="orders__discount">-¥3,600</td>
                        <td class="orders__amount">¥32,400</td>
                    </tr>
                    <tr>
                        <td>ORD-7289</td>
                        <td class="orders__muted">USR-0087</td>
                        <td><span class="orders__status orders__status--delivered">DELIVERED</span></td>
                        <td class="orders__amount">¥29,800 <span class="orders__muted">(14,900×2)</span></td>
                        <td class="orders__amount">¥800</td>
                        <td class="orders__discount">-¥1,500</td>
                        <td class="orders__amount">¥29,100</td>
                    </tr>
                    <tr>
                        <td>ORD-7288</td>
                        <td class="orders__muted">USR-0205</td>
                        <td><span class="orders__status orders__status--delivered">DELIVERED</span></td>
                        <td class="orders__amount">¥62,000 <span class="orders__muted">(62,000×1)</span></td>
                        <td class="orders__amount">—</td>
                        <td class="orders__discount">-¥6,200</td>
                        <td class="orders__amount">¥55,800</td>
                    </tr>
                    <tr>
                        <td>ORD-7287</td>
                        <td class="orders__muted">USR-0041</td>
                        <td><span class="orders__status orders__status--shipped">SHIPPED</span></td>
                        <td class="orders__amount">¥24,500 <span class="orders__muted">(24,500×1)</span></td>
                        <td class="orders__amount">¥800</td>
                        <td class="orders__amount">—</td>
                        <td class="orders__amount">¥25,300</td>
                    </tr>
                    <tr>
                        <td>ORD-7286</td>
                        <td class="orders__muted">USR-0312</td>
                        <td><span class="orders__status orders__status--delivered">DELIVERED</span></td>
                        <td class="orders__amount">¥15,600 <span class="orders__muted">(5,200×3)</span></td>
                        <td class="orders__amount">¥500</td>
                        <td class="orders__amount">—</td>
                        <td class="orders__amount">¥16,100</td>
                    </tr>
                    <tr>
                        <td>ORD-7285</td>
                        <td class="orders__muted">USR-0099</td>
                        <td><span class="orders__status orders__status--cancelled">CANCELLED</span></td>
                        <td class="orders__amount">¥55,000 <span class="orders__muted">(55,000×1)</span></td>
                        <td class="orders__amount">—</td>
                        <td class="orders__discount">-¥5,500</td>
                        <td class="orders__amount">¥49,500</td>
                    </tr>
                    <tr>
                        <td>ORD-7284</td>
                        <td class="orders__muted">USR-0178</td>
                        <td><span class="orders__status orders__status--delivered">DELIVERED</span></td>
                        <td class="orders__amount">¥12,800 <span class="orders__muted">(3,200×4)</span></td>
                        <td class="orders__amount">¥500</td>
                        <td class="orders__discount">-¥1,280</td>
                        <td class="orders__amount">¥12,020</td>
                    </tr>
                    <tr>
                        <td>ORD-7283</td>
                        <td class="orders__muted">USR-0256</td>
                        <td><span class="orders__status orders__status--shipped">SHIPPED</span></td>
                        <td class="orders__amount">¥18,400 <span class="orders__muted">(9,200×2)</span></td>
                        <td class="orders__amount">—</td>
                        <td class="orders__amount">—</td>
                        <td class="orders__amount">¥18,400</td>
                    </tr>
                    <tr>
                        <td>ORD-7282</td>
                        <td class="orders__muted">USR-0064</td>
                        <td><span class="orders__status orders__status--processing">PROCESSING</span></td>
                        <td class="orders__amount">¥21,600 <span class="orders__muted">(10,800×2)</span></td>
                        <td class="orders__amount">¥800</td>
                        <td class="orders__discount">-¥2,160</td>
                        <td class="orders__amount">¥20,240</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
