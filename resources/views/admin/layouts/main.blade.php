<!doctype html>
<html lang="ja">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield('title', 'APPAREL ADMIN | 商品管理')</title>

        {{-- Icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

        {{-- Admin CSS --}}
        <link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">

        @stack('styles')
    </head>

    <body class="admin">
        <div class="admin-shell" id="adminShell">
            {{-- Sidebar --}}
            @include('admin.partials.sidebar')

            {{-- Overlay (mobile) --}}
            <div class="admin-overlay" id="adminOverlay" aria-hidden="true"></div>

            <div class="admin-main">
                {{-- Page content (product form etc.) --}}
                <main class="admin-content">
                    @include('admin.partials.flash')
                    @yield('content')
                </main>
            </div>
        </div>

        {{-- Admin JS --}}
        <script>
            // Sidebar toggle (mobile)
            (() => {
                const shell = document.getElementById('adminShell');
                const toggle = document.getElementById('menuToggle');
                const overlay = document.getElementById('adminOverlay');
                const closeBtn = document.getElementById('sidebarClose');
                const sidebar = document.getElementById('adminSidebar');
                const mq = window.matchMedia('(min-width: 1140px)');

                if (!shell || !toggle) return;

                const closeSidebar = () => {
                    shell.classList.remove('is-sidebar-open');
                    toggle.setAttribute('aria-expanded', 'false');
                };

                const openSidebar = () => {
                    shell.classList.add('is-sidebar-open');
                    toggle.setAttribute('aria-expanded', 'true');
                };

                toggle.addEventListener('click', () => {
                    if (mq.matches) return; // desktopではトグル不要（常時表示）
                    shell.classList.contains('is-sidebar-open') ? closeSidebar() : openSidebar();
                });

                overlay?.addEventListener('click', closeSidebar);
                closeBtn?.addEventListener('click', closeSidebar);

                // Close on nav click (mobile)
                sidebar?.addEventListener('click', (e) => {
                    if (mq.matches) return; // desktop
                    const target = e.target;
                    if (!(target instanceof Element)) return;
                    const link = target.closest('a');
                    if (link) closeSidebar();
                });

                window.addEventListener('resize', () => {
                    if (mq.matches) closeSidebar();
                });

                // Dropdown
                document.querySelectorAll('[data-dropdown]').forEach((root) => {
                    const btn = root.querySelector('[data-dropdown-trigger]');
                    const menu = root.querySelector('[data-dropdown-menu]');
                    if (!btn || !menu) return;

                    const close = () => {
                        root.classList.remove('is-open');
                        btn.setAttribute('aria-expanded', 'false');
                    };

                    const open = () => {
                        root.classList.add('is-open');
                        btn.setAttribute('aria-expanded', 'true');
                    };

                    btn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        root.classList.contains('is-open') ? close() : open();
                    });

                    document.addEventListener('click', (e) => {
                        if (!root.classList.contains('is-open')) return;
                        if (root.contains(e.target)) return;
                        close();
                    });

                    document.addEventListener('keydown', (e) => {
                        if (e.key === 'Escape') close();
                    });
                });

            })();
        </script>

        @stack('scripts')
    </body>

</html>
