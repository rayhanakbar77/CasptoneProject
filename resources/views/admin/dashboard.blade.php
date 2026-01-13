<x-layouts.admin title="Dashboard Admin">
    <div class="container mx-auto">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-800">Ringkasan Statistik</h1>
            <p class="text-slate-500">Pantau perkembangan event dan transaksi Anda hari ini.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="card bg-white shadow-sm border border-slate-100 hover:shadow-md transition-shadow duration-300">
                <div class="card-body flex flex-row items-center justify-between p-6">
                    <div>
                        <p class="text-sm font-medium text-slate-500 mb-1">Total Event</p>
                        <h2 class="text-3xl font-bold text-slate-800">{{ $totalEvents ?? 0 }}</h2>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-3a2 2 0 0 0 0-4V7a2 2 0 0 1 2-2" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="card bg-white shadow-sm border border-slate-100 hover:shadow-md transition-shadow duration-300">
                <div class="card-body flex flex-row items-center justify-between p-6">
                    <div>
                        <p class="text-sm font-medium text-slate-500 mb-1">Total Kategori</p>
                        <h2 class="text-3xl font-bold text-slate-800">{{ $totalCategories ?? 0 }}</h2>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="card bg-white shadow-sm border border-slate-100 hover:shadow-md transition-shadow duration-300">
                <div class="card-body flex flex-row items-center justify-between p-6">
                    <div>
                        <p class="text-sm font-medium text-slate-500 mb-1">Total Transaksi</p>
                        <h2 class="text-3xl font-bold text-slate-800">{{ $totalOrders ?? 0 }}</h2>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-8 p-8 bg-indigo-600 rounded-2xl text-white shadow-lg flex flex-col md:flex-row items-center justify-between">
            <div>
                <h3 class="text-xl font-bold">Selamat Datang di Admin Panel!</h3>
                <p class="text-indigo-100 mt-2 text-sm opacity-90">Kelola semua event dan kategori dengan mudah dari sini.</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('admin.events.index') }}" class="btn bg-white text-indigo-600 border-none hover:bg-gray-100">Lihat Event</a>
            </div>
        </div>
    </div>
</x-layouts.admin>
