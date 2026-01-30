<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Sample Page')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <script src="{{ asset('js/hunberger-menu.js') }}" defer></script>
        <style>
            body {
                margin: 0;
                font-family: Arial, "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
                color: #333;
            }

            /* ===== header ===== */
            .header__wrapper {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 72px;
                background: transparent;
                z-index: 1000;
                pointer-events: none;
            }

            .header__inner {
                max-width: 1400px;
                margin: 0 auto;
                height: 100%;
                padding: 0 32px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                pointer-events: auto;
            }

            .header__log {}

            .header__nav {
                margin-left: auto;
                width: auto;
                display: flex;
                justify-content: flex-end;
                gap: 24px;
                align-items: center;
            }

            .header__wrapper a {
                position: relative;
                display: inline-block;
                padding-bottom: 4px;
                color: #ffffff;
                text-decoration: none;
                font-size: 13px;
                letter-spacing: .08em;
                transition: opacity .2s ease;
            }

            .header__nav a.icon {
                font-size: 25px;
            }

            .header__nav a:not(.icon) {
                font-size: 16px;
            }

            .header__nav a::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;

                width: 100%;
                height: 1px;
                background: currentColor;

                transform: scaleX(0);
                transform-origin: left;
                transition: transform .25s ease;
                pointer-events: none;
            }

            /* hover時に出す */
            .header__nav a:hover::after {
                transform: scaleX(1);
            }

            .header__nav a:hover {
                opacity: .6;
            }

            @media (min-width: 1140px) {
                .header__inner {
                    padding: 24px 80px 0;
                }
            }

            .header__utility {}

            .site-logo {
                display: flex;
                align-items: center;
                color: #ffffff;
            }


            /* ---------------------ハンバーガーメニュー----------------- */

            .hamburger {
                width: 64px;
                height: 64px;
                background: transparent;
                border: 0;
                padding: 0;
                cursor: pointer;
                display: grid;
                place-items: center;
            }

            /* 真ん中の線 */
            .hamburger span {
                position: relative;
                display: block;
                width: 32px;
                /* 線の長さ */
                height: 4px;
                /* 線の太さ */
                background: white;
                border-radius: 999px;
                /* 端を丸く */
            }

            /* 上下の線（疑似要素で追加） */
            .hamburger span::before,
            .hamburger span::after {
                content: "";
                position: absolute;
                left: 0;
                width: 32px;
                height: 4px;
                background: white;
                border-radius: 999px;
            }

            .hamburger span::before {
                top: -10px;
                /* 線の間隔 */
            }

            .hamburger span::after {
                top: 10px;
                /* 線の間隔 */
            }

            /* ====== PC: 1000px以上 ====== */
            @media (min-width: 1000px) {
                .menu-links {
                    display: flex;
                    align-items: center;
                    gap: 32px;
                    /* 要素間の幅 */
                }
            }

            .hamburger {
                display: none;
            }

            /* ====== SP/Tablet: 1000px未満 ====== */
            @media (max-width: 999px) {
                .header__nav {
                    width: auto;
                    gap: 12px;
                    position: relative;
                }

                .hamburger {
                    display: grid;
                }

                /* 普段はリンクを隠す */
                .header__nav .menu-links {
                    display: none;
                }

                /* 開いたらドロップダウン表示 */
                .header__nav.is-open .menu-links {
                    display: flex;
                    flex-direction: column;
                    gap: 16px;

                    position: absolute;
                    top: 72px;
                    /* ヘッダーの高さに合わせる */
                    right: 0;

                    width: min(320px, 90vw);
                    padding: 16px 18px;

                    background: rgba(0, 0, 0, .75);
                    backdrop-filter: blur(6px);
                    border-radius: 14px;
                }

                .header__nav.is-open .menu-links a {
                    color: rgba(255, 255, 255, .9);
                    font-size: 16px;
                }

                /* カートアイコンも縦メニュー内で見やすく */
                .header__nav.is-open .menu-links a.icon {
                    font-size: 24px;
                }
            }
        </style>
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

        @yield('content')

        @stack('scripts')
    </body>

</html>
