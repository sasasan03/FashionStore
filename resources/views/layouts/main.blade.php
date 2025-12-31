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
    </style>
    @stack('styles')
</head>

<body>

    <header>
        <div class="header-inner">
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
        </div>
    </header>

    @yield('content')

</body>

</html>