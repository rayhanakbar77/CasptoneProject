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
                    Amankan Tiketmu,<br>
                    <span class="text-blue-500">Nikmati Momennya.</span>
                </h1>
                <p class="text-slate-400 text-lg max-w-md leading-relaxed">
                    Platform ticketing terpercaya untuk konser, festival, dan event favoritmu. Bergabunglah dengan ribuan pengguna lainnya hari ini.
                </p>
            </div>

            <div class="relative z-10 flex gap-6 text-sm text-slate-500 font-medium">
                <span>© 2026 BengTix Inc.</span>
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
                <a href="#" class="hover:text-white transition">Terms of Service</a>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 sm:p-12 lg:p-24 bg-white">
            <div class="w-full max-w-[440px] space-y-10">

                <div class="lg:hidden mb-8">
                    <span class="text-2xl font-black text-blue-900">BENGTIX</span>
                </div>

                <div class="text-center lg:text-left">
                    <h2 class="text-3xl font-bold text-gray-900">Selamat Datang</h2>
                    <p class="text-gray-500 mt-2 text-sm">Masuk untuk mengelola pesanan tiket Anda.</p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div class="space-y-2">
                        <label for="email" class="text-sm font-semibold text-gray-700">Email Address</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all font-medium text-gray-800 placeholder-gray-400"
                            placeholder="nama@email.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label for="password" class="text-sm font-semibold text-gray-700">Password</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm font-medium text-blue-600 hover:text-blue-700">
                                    Lupa Password?
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all font-medium text-gray-800 placeholder-gray-400"
                            placeholder="••••••••">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-600">Ingat saya di perangkat ini</label>
                    </div>

                    <button type="submit" class="w-full bg-blue-900 hover:bg-blue-800 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-blue-900/20 hover:shadow-blue-900/40 transition-all transform hover:-translate-y-0.5 active:translate-y-0 text-sm tracking-wide uppercase">
                        Masuk Sekarang
                    </button>
                </form>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-500">Atau</span>
                    </div>
                </div>

                <p class="text-center text-sm text-gray-600">
                    Belum memiliki akun?
                    <a href="{{ route('register') }}" class="font-bold text-blue-700 hover:text-blue-900 hover:underline transition">
                        Daftar Gratis
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
