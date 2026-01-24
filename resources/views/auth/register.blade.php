<x-guest-layout>
    <div class="flex min-h-screen w-full bg-white">

        <div class="hidden lg:flex lg:w-1/2 relative bg-[#0F172A] overflow-hidden flex-col justify-between p-16">

            <div class="absolute inset-0 z-0 opacity-20">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                            <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="0.5"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#grid)" />
                </svg>
            </div>

            <div class="absolute inset-0 bg-gradient-to-t from-[#0F172A] via-transparent to-transparent z-0"></div>

            <div class="relative z-10 flex items-center gap-3">
                <div class="bg-blue-600 text-white p-2 rounded-lg font-black text-xl shadow-lg shadow-blue-900/50">
                    B
                </div>
                <span class="text-2xl font-bold text-white tracking-wide">BENGTIX</span>
            </div>

            <div class="relative z-10">
                <h1 class="text-5xl font-bold text-white leading-tight mb-6">
                    Bergabunglah <br>
                    <span class="text-blue-500">Sekarang Juga.</span>
                </h1>
                <p class="text-slate-400 text-lg max-w-md leading-relaxed">
                    Daftar akun gratis dan dapatkan akses eksklusif ke ribuan event seru. Jangan sampai kehabisan tiket impianmu.
                </p>
            </div>

            <div class="relative z-10 text-sm text-slate-500 font-medium">
                © {{ date('Y') }} BengTix Inc. Built for entertainment.
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 sm:p-12 lg:p-16 bg-white overflow-y-auto">
            <div class="w-full max-w-[440px] space-y-8">

                <div class="lg:hidden mb-6">
                    <span class="text-2xl font-black text-blue-900">BENGTIX</span>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Buat Akun Baru</h2>
                    <p class="text-gray-500 mt-2 text-sm">Lengkapi data diri Anda untuk memulai.</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <div class="space-y-1">
                        <label for="name" class="text-sm font-semibold text-gray-700">Nama Lengkap</label>
                        <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all font-medium text-gray-800 placeholder-gray-400"
                            placeholder="John Doe">
                        <x-input-error :messages="$errors->get('name')" class="mt-1" />
                    </div>

                    <div class="space-y-1">
                        <label for="email" class="text-sm font-semibold text-gray-700">Alamat Email</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all font-medium text-gray-800 placeholder-gray-400"
                            placeholder="nama@email.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-1" />
                    </div>

                    <div class="space-y-1">
                        <label for="password" class="text-sm font-semibold text-gray-700">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all font-medium text-gray-800 placeholder-gray-400"
                            placeholder="Minimal 8 karakter">
                        <x-input-error :messages="$errors->get('password')" class="mt-1" />
                    </div>

                    <div class="space-y-1">
                        <label for="password_confirmation" class="text-sm font-semibold text-gray-700">Konfirmasi Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all font-medium text-gray-800 placeholder-gray-400"
                            placeholder="Ulangi password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                    </div>

                    <button type="submit" class="w-full bg-blue-900 hover:bg-blue-800 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-blue-900/20 hover:shadow-blue-900/40 transition-all transform hover:-translate-y-0.5 mt-4">
                        Daftar Sekarang
                    </button>
                </form>

                <div class="text-center pt-2">
                    <p class="text-sm text-gray-600">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="font-bold text-blue-700 hover:text-blue-900 hover:underline transition">
                            Masuk di sini
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
