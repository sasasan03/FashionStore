<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>APPAREL ADMIN | 商品管理</title>
    <meta name="description" content="アパレルECサイト管理画面 - 商品登録・管理" />

    <!-- アイコン（Nextのmetadata相当） -->
    <link rel="icon" type="image/svg+xml" href="/icon.svg">
    <link rel="icon" href="/icon-light-32x32.png" media="(prefers-color-scheme: light)">
    <link rel="icon" href="/icon-dark-32x32.png" media="(prefers-color-scheme: dark)">
    <link rel="apple-touch-icon" href="/apple-icon.png">

    <!-- フォント（Next/font の代わり：Google Fontsで読み込み） -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Geist+Mono:wght@100..900&display=swap" rel="stylesheet">

    <!-- さっきの “Laravelで使えるCSS” を読み込む -->
    <link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">

    <!-- 追加の見た目（管理画面っぽくする最低限） -->
    <style>
        /* Nextの body className="font-sans antialiased" 相当 */
        body {
            font-family: "Geist", system-ui, -apple-system, "Segoe UI", Roboto, "Noto Sans JP", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin: 0;
        }

        .app {
            min-height: 100svh;
            display: grid;
            grid-template-columns: 280px 1fr;
        }

        .sidebar {
            background: var(--sidebar);
            color: var(--sidebar-foreground);
            border-right: 1px solid var(--sidebar-border);
            padding: 18px;
        }

        .main {
            background: var(--background);
            color: var(--foreground);
            padding: 24px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 16px;
        }

        .muted {
            color: var(--muted-foreground);
        }
    </style>
</head>

<body>
    <div class="app">
        <aside class="sidebar">
            <h1 style="margin:0 0 8px;">APPAREL ADMIN</h1>
            <p class="muted" style="margin:0 0 16px;">商品管理</p>

            <nav style="display:flex; flex-direction:column; gap:10px;">
                <a href="#" style="color:inherit; text-decoration:none;">ダッシュボード</a>
                <a href="#" style="color:inherit; text-decoration:none;">商品一覧</a>
                <a href="#" style="color:inherit; text-decoration:none;">商品登録</a>
                <a href="#" style="color:inherit; text-decoration:none;">カテゴリ</a>
            </nav>
        </aside>

        <main class="main">
            <header style="display:flex; align-items:center; justify-content:space-between; margin-bottom:16px;">
                <div>
                    <h2 style="margin:0;">商品管理</h2>
                    <div class="muted" style="font-size:14px;">アパレルECサイト管理画面 - 商品登録・管理</div>
                </div>
            </header>

            <section class="card">
                <h3 style="margin:0 0 8px;">ここにコンテンツを入れる</h3>
                <p class="muted" style="margin:0;">RootLayout の children 相当をここに描画するイメージ。</p>
            </section>
        </main>
    </div>
    <!-- Nextの Analytics 相当はHTML単体では省略（必要なら後でGA等に置き換え） -->
</body>

</html>