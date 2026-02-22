@extends('admin.layouts.main')

@section('title', 'APPAREL ADMIN | ダッシュボード')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
@endpush

@section('content')
    <div class="dashboard">
        <h1 class="dashboard__title">At a Glance</h1>
        <p class="dashboard__subtitle">Your business metrics for the current period.</p>

        <section class="dashboard__stats">
            <div class="dashboard__card">
                <div class="dashboard__card-label">
                    TOTAL REVENUE
                    <span>↗</span>
                </div>
                <div class="dashboard__card-value">$319.96</div>
                <div class="dashboard__card-sub">+14.5% from last month</div>
            </div>
            <div class="dashboard__card">
                <div class="dashboard__card-label">
                    TOTAL ORDERS
                    <i class="bi bi-box"></i>
                </div>
                <div class="dashboard__card-value">3</div>
                <div class="dashboard__card-sub">+8.2% from last month</div>
            </div>
            <div class="dashboard__card">
                <div class="dashboard__card-label">
                    ACTIVE PRODUCTS
                    <i class="bi bi-person"></i>
                </div>
                <div class="dashboard__card-value">3</div>
                <div class="dashboard__card-meta">Across 8 categories</div>
            </div>
        </section>

        <section class="dashboard__grid">
            <div class="dashboard__card">
                <h3 class="dashboard__panel-title">Revenue Overview</h3>
                <div class="dashboard__chart" aria-hidden="true">
                    <svg viewBox="0 0 600 240" preserveAspectRatio="none">
                        <polyline fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="2"
                            points="0,180 80,200 160,170 240,140 320,190 400,80 480,160 560,140 600,120" />
                        <polyline fill="none" stroke="#f5f6f7" stroke-width="3"
                            points="0,180 80,200 160,170 240,140 320,190 400,80 480,160 560,140 600,120" />
                    </svg>
                </div>
            </div>
            <div class="dashboard__card">
                <h3 class="dashboard__panel-title">Recent Transactions</h3>
                <div class="dashboard__transactions">
                    <div class="transaction">
                        <div>
                            <div class="transaction__name">Charlie Brown</div>
                            <div class="transaction__email">charlie@example.com</div>
                        </div>
                        <div>
                            <div class="transaction__amount">$29.99</div>
                            <div class="transaction__status">DELIVERED</div>
                        </div>
                    </div>
                    <div class="transaction">
                        <div>
                            <div class="transaction__name">Bob Johnson</div>
                            <div class="transaction__email">bob@example.com</div>
                        </div>
                        <div>
                            <div class="transaction__amount">$199.99</div>
                            <div class="transaction__status">SHIPPED</div>
                        </div>
                    </div>
                    <div class="transaction">
                        <div>
                            <div class="transaction__name">Alice Smith</div>
                            <div class="transaction__email">alice@example.com</div>
                        </div>
                        <div>
                            <div class="transaction__amount">$89.98</div>
                            <div class="transaction__status">PENDING</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
