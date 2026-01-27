<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Sample Page')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <style>
            body {
                margin: 0;
                font-family: Arial, "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
                color: #333;
            }

            /* ===== header ===== */
            .site-header {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 72px;

                background: transparent;
                z-index: 1000;

                pointer-events: none;
            }

            .header-inner {
                max-width: 1400px;
                margin: 0 auto;
                height: 100%;
                padding: 0 32px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                pointer-events: auto;
            }

            /* .header-nav {
                display: flex;
                gap: 24px;
                align-items: center;
            } */
            .header-nav {
                margin-left: auto;
                /* ← これが決定打 */
                width: 60%;

                display: flex;
                justify-content: flex-end;
                gap: 24px;
                align-items: center;
            }

            .header-nav a {
                position: relative;
                display: inline-block;
                padding-bottom: 4px;
                color: rgba(255, 255, 255, .85);
                text-decoration: none;
                font-size: 13px;
                letter-spacing: .08em;
                transition: opacity .2s ease;
            }

            .header-nav a.icon {
                font-size: 28px;
            }

            .header-nav a:not(.icon) {
                font-size: 18px;
            }

            .header-nav a::after {
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
            .header-nav a:hover::after {
                transform: scaleX(1);
            }

            .header-nav a:hover {
                opacity: .6;
            }

            .header__utility {}
        </style>
        @stack('styles')
    </head>

    <body>
        <header class="site-header">
            <div class="header-inner">
                <nav class="header-nav">
                    <a href="#">TOP</a>
                    <a href="#">ABOUT</a>
                    <a href="#">CATEGORY</a>
                    <a href="#">MY PAGE</a>
                    <a href="#">CONTACT</a>
                    <a href="/cart" class="icon">
                        <i class="bi bi-cart"></i>
                    </a>
                </nav>
            </div>
        </header>

        @yield('content')

        @stack('scripts')
    </body>

</html>
