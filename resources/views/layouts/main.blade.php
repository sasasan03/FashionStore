<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Sample Page')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <script src="{{ asset('js/hunberger-menu.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        @stack('styles')
    </head>

    <body>
        <header class="header__wrapper">
            <div class="header__inner">
                {{-- 将来的にはSVGにする --}}
                <a href="/" class="site-logo">SampleShop</a>
                <nav class="header__nav" id="headerNav">
                    <!-- 1000px以上は横並び表示 / 1000px未満はハンバーガー内へ -->
                    <div class="menu-links" id="mobileMenu">
                        <button class="menu-close" type="button" aria-label="close menu">×</button>
                        <a href="#">TOP</a>
                        <a href="#">ABOUT</a>
                        <a href="#">CATEGORY</a>
                        <a href="#">MY PAGE</a>
                        <a href="#">CONTACT</a>
                    </div>
                    <a href="/cart" class="icon cart-link">
                        <i class="bi bi-cart"></i>
                    </a>

                    <!-- 1000px未満だけ表示 -->
                    <button class="hamburger" aria-label="menu" aria-expanded="false" aria-controls="mobileMenu">
                        <span></span>
                    </button>
                </nav>
            </div>
        </header>
        <div class="menu-overlay" id="menuOverlay" aria-hidden="true"></div>

        @yield('content')

        @stack('scripts')
    </body>

</html>
