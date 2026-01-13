<!DOCTYPE html>
<html lang="id" data-theme="light"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800">
    <div class="drawer lg:drawer-open w-full min-h-screen">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex flex-col">
            <nav class="navbar w-full bg-white/80 backdrop-blur-md sticky top-0 z-10 border-b border-slate-100 px-6">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer-4" aria-label="open sidebar" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor" class="inline-block size-6">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>

                <div class="flex-1 px-2 mx-2">
                    <span class="text-lg font-bold text-slate-700">Admin Panel</span>
                </div>

                <div class="flex-none gap-2">
                    <div class="avatar placeholder">
                        <div class="bg-indigo-600 text-white rounded-full w-8 h-8">
                            <span class="text-xs">A</span>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="p-6 md:p-8 flex-1">
                {{ $slot }}
            </main>

            <footer class="footer footer-center p-4 bg-white text-base-content border-t border-slate-100 mt-auto">
                <aside>
                    <p class="text-slate-400 text-sm">© {{ date('Y') }} MyLaravelApp. All rights reserved.</p>
                </aside>
            </footer>
        </div>

        @include('components.admin.sidebar')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
