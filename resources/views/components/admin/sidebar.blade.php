<div class="drawer-side z-20 shadow-xl lg:shadow-none">
    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>

    <div class="flex min-h-full flex-col bg-white w-72 border-r border-slate-100 transition-all duration-300">

        {{-- Header / Logo --}}
        <div class="h-16 flex items-center justify-center border-b border-slate-50 mb-4">
            <div class="w-full flex items-center px-6 gap-3">
                <div class="w-8 h-8 rounded bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">
                    {{-- Pastikan path logo benar --}}
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="w-full h-full object-cover rounded">
                </div>
                <span class="font-bold text-xl text-slate-800">Dashboard</span>
            </div>
        </div>

        {{-- Menu List --}}
        <ul class="menu w-full px-4 gap-2 text-slate-500 font-medium">

            {{-- 1. Dashboard --}}
            <li>
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200
                   {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-50 text-indigo-600 font-semibold shadow-sm ring-1 ring-indigo-200' : 'hover:bg-slate-50 hover:text-slate-900' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6 19h3v-5q0-.425.288-.712T10 13h4q.425 0 .713.288T15 14v5h3v-9l-6-4.5L6 10zm-2 0v-9q0-.475.213-.9t.587-.7l6-4.5q.525-.4 1.2-.4t1.2.4l6 4.5q.375.275.588.7T20 10v9q0 .825-.588 1.413T18 21h-4q-.425 0-.712-.288T13 20v-5h-2v5q0 .425-.288.713T10 21H6q-.825 0-1.412-.587T4 19m8-6.75" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- SECTION: MASTER DATA --}}
            <li class="menu-title text-xs font-bold text-slate-400 uppercase mt-4 mb-1 px-4">Master Data</li>

            {{-- 2. Kategori --}}
            <li>
                <a href="{{ route('admin.categories.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200
                   {{ request()->routeIs('admin.categories.*') ? 'bg-indigo-50 text-indigo-600 font-semibold shadow-sm ring-1 ring-indigo-200' : 'hover:bg-slate-50 hover:text-slate-900' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                         <path d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3a3 3 0 1 0 6 0a3 3 0 1 0-6 0" />
                    </svg>
                    <span>Kategori</span>
                </a>
            </li>

            {{-- 3. Event --}}
            <li>
                <a href="{{ route('admin.events.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200
                   {{ request()->routeIs('admin.events.*') ? 'bg-indigo-50 text-indigo-600 font-semibold shadow-sm ring-1 ring-indigo-200' : 'hover:bg-slate-50 hover:text-slate-900' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 5v2m0 4v2m0 4v2M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-3a2 2 0 0 0 0-4V7a2 2 0 0 1 2-2" />
                    </svg>
                    <span>Event</span>
                </a>
            </li>

            {{-- 4. Metode Pembayaran (BARU) --}}
            <li>
                <a href="{{ route('admin.payment-types.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200
                   {{ request()->routeIs('admin.payment-types*') ? 'bg-indigo-50 text-indigo-600 font-semibold shadow-sm ring-1 ring-indigo-200' : 'hover:bg-slate-50 hover:text-slate-900' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <span>Metode Pembayaran</span>
                </a>
            </li>

            {{-- SECTION: TRANSAKSI --}}
            <li class="menu-title text-xs font-bold text-slate-400 uppercase mt-4 mb-1 px-4">Transaksi</li>

            {{-- 5. History Pembelian --}}
            <li>
                <a href="{{ route('admin.histories.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200
                   {{ request()->routeIs('admin.histories.*') ? 'bg-indigo-50 text-indigo-600 font-semibold shadow-sm ring-1 ring-indigo-200' : 'hover:bg-slate-50 hover:text-slate-900' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span>History Pembelian</span>
                </a>
            </li>
        </ul>

        {{-- Footer / Logout --}}
        <div class="p-4 mt-auto border-t border-slate-100">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-ghost w-full justify-start text-red-500 hover:bg-red-50 hover:text-red-600 gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M10 17v-2h4v-2h-4v-2l-5 3l5 3m9-12H5q-.825 0-1.413.588T3 7v10q0 .825.587 1.413T5 19h14q.825 0 1.413-.587T21 17v-3h-2v3H5V7h14v3h2V7q0-.825-.587-1.413T19 5z" />
                    </svg>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </div>
</div>
