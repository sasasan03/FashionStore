<!doctype html>
<html lang="ja" class="dark">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Admin Login</title>
        <link rel="stylesheet" href="/css/admin/layout.css" />
    </head>

    <body class="admin admin-auth">
        <main class="auth-wrap" aria-label="ログイン">
            <section class="auth-card" role="region" aria-label="ログインフォーム">
                <h1 class="auth-title">Sample Page</h1>

                @if (session('error'))
                    <div class="auth-alert" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form class="auth-form" method="post" action="{{ route('admin.login.submit') }}" novalidate>
                    @csrf

                    <div class="auth-field">
                        <label class="auth-label" for="login_id">email</label>
                        <input id="login_id" name="id" class="auth-input" type="text" inputmode="text"
                            autocomplete="username" placeholder="Enter your email" value="{{ old('id', '') }}"
                            required />
                    </div>

                    <div class="auth-field">
                        <label class="auth-label" for="login_password">Password</label>

                        <div class="auth-inputWrap">
                            <input id="login_password" name="password" class="auth-input auth-input--withBtn"
                                type="password" autocomplete="current-password" placeholder="Enter your password"
                                required />
                            <button class="auth-eye" type="button" aria-label="パスワード表示切替" data-toggle-password>
                                <span aria-hidden="true">🔑</span>
                                <span class="auth-eyeCaret" aria-hidden="true">▾</span>
                            </button>
                        </div>
                    </div>

                    <button class="auth-submit" type="submit">Login</button>
                </form>
            </section>
        </main>

        <script>
            (function() {
                var btn = document.querySelector('[data-toggle-password]');
                var input = document.getElementById('login_password');
                if (!btn || !input) return;

                btn.addEventListener('click', function() {
                    var isPw = input.getAttribute('type') === 'password';
                    input.setAttribute('type', isPw ? 'text' : 'password');
                });
            })();
        </script>
    </body>

</html>
