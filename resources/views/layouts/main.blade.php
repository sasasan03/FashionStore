<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Sample Page')</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
                color: #333;
            }

            /* ===== header ===== */
            header {
                border-bottom: 1px solid #eee;
            }

            .header-inner {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px 10px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .logo {
                font-size: 24px;
                font-weight: bold;
            }

            nav ul {
                display: flex;
                gap: 24px;
                list-style: none;
                margin: 0;
                padding: 0;
            }

            nav a {
                text-decoration: none;
                color: #333;
                font-size: 14px;
            }

            /* ---------new--------- */

            .header-area {
                height: 13vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .header__title-area {
                width: 80%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: rgba(255, 166, 0, 0.731)
            }

            .header__shopping-title {
                font-family: "Noto Serif JP", serif;
                font-size: 24px;
                font-weight: 500;
                letter-spacing: 0.04em;
            }

            .header__sub-title {
                margin-top: -15px;
                font-size: 12px;
                font-weight: 400;
                letter-spacing: 0.18em;
                color: rgba(0, 0, 0, 0.65);
                text-transform: uppercase;
            }

            .header__utility {}
        </style>
        @stack('styles')
    </head>

    <body>

        <header class="header-area">
            <div class="header__title-area">
                <h1 class="header__shopping-title">shopping title</h1>
                <p class="header__sub-title">sub title</p>
            </div>

            {{-- <div class="header-inner">
            <div class="logo">SamplePage</div>
            <nav>
                <ul>
                    <li><a href="#">TOP</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CATEGORY</a></li>
                    <li><a href="#">MEMBER SHIP</a></li>
                    <li><a href="#">MY PAGE</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">INSTAGRAM</a></li>
                </ul>
            </nav>
        </div> --}}
        </header>

        @yield('content')

    </body>

</html>
