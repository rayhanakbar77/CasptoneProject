<x-layouts.app>
    <div class="relative bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 text-white overflow-hidden">

        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white" />
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-24 md:py-32 text-center z-10">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-800/50 border border-blue-400 text-xs font-semibold tracking-wider mb-6">
                BENGTIX OFFICIAL
            </span>

            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6 leading-tight">
                Amankan Tiketmu, <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-cyan-200">
                    Nikmati Momennya.
                </span>
            </h1>

            <p class="text-lg md:text-xl text-blue-100 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
                Platform tiket termudah untuk konser, seminar, dan festival favoritmu.
                Dapatkan pengalaman terbaik tanpa ribet hanya di BengTix.
            </p>

            <div class="flex justify-center">
                <a href="#event-section"
                   class="inline-flex items-center gap-2 bg-white !text-blue-900 hover:text-blue-700 hover:bg-gray-100 font-extrabold rounded-full px-8 py-4 transition-all transform hover:scale-105 shadow-xl hover:shadow-2xl">
                    <span>Jelajahi Sekarang</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div id="event-section" class="max-w-7xl mx-auto px-6 py-16 bg-gray-50 min-h-screen">

        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <a href="{{ route('home') }}"
               class="px-6 py-2 rounded-full shadow-sm font-medium border transition-all duration-300 {{ !request('kategori') ? 'bg-blue-900 text-white border-blue-900' : 'bg-white text-gray-600 border-gray-200 hover:border-blue-500 hover:text-blue-600' }}">
                Semua Event
            </a>
            @foreach($categories as $kategori)
            <a href="{{ route('home', ['kategori' => $kategori->id]) }}"
               class="px-6 py-2 rounded-full shadow-sm font-medium border transition-all duration-300 {{ request('kategori') == $kategori->id ? 'bg-blue-900 text-white border-blue-900' : 'bg-white text-gray-600 border-gray-200 hover:border-blue-500 hover:text-blue-600' }}">
                {{ $kategori->nama }}
            </a>
            @endforeach
        </div>

        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-gray-900 border-l-4 border-blue-900 pl-4">Event Terbaru</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($events as $event)
            <a href="{{ route('events.show', $event) }}" class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 transform hover:-translate-y-1 block h-full flex flex-col">

                <div class="relative h-56 overflow-hidden">
                    <img src="{{ $event->gambar ? asset('storage/' . $event->gambar) : 'https://placehold.co/600x400?text=No+Image' }}"
                         alt="{{ $event->judul }}"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60"></div>

                    <div class="absolute top-3 right-3 bg-white/95 backdrop-blur text-center rounded-lg px-3 py-2 shadow-lg min-w-[60px]">
                        <span class="block text-xs font-bold text-red-500 uppercase">
                            {{ \Carbon\Carbon::parse($event->tanggal_waktu)->translatedFormat('M') }}
                        </span>
                        <span class="block text-2xl font-black text-gray-900 leading-none">
                            {{ \Carbon\Carbon::parse($event->tanggal_waktu)->format('d') }}
                        </span>
                    </div>

                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 bg-blue-600/90 backdrop-blur-sm text-white text-[10px] font-bold rounded-full shadow-md uppercase tracking-wider">
                            {{ $event->kategori->nama ?? 'Event' }}
                        </span>
                    </div>
                </div>

                <div class="p-5 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 leading-snug group-hover:text-blue-800 transition-colors">
                            {{ $event->judul }}
                        </h3>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-start gap-2 text-gray-500 text-sm">
                                <svg class="w-4 h-4 text-blue-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="line-clamp-1">{{ $event->lokasi }}</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-500 text-sm">
                                <svg class="w-4 h-4 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>{{ \Carbon\Carbon::parse($event->tanggal_waktu)->format('H:i') }} WIB</span>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-100 pt-4 mt-auto">
                        <div class="flex justify-between items-end">
                            <div class="flex flex-col">
                                <span class="text-xs text-gray-400 font-medium">Mulai dari</span>
                                <span class="text-lg font-black text-blue-900">
                                    @if(isset($event->tikets_min_harga))
                                        {{ $event->tikets_min_harga == 0 ? 'Gratis' : 'Rp ' . number_format($event->tikets_min_harga, 0, ',', '.') }}
                                    @else
                                        @php $minPrice = $event->tikets->min('harga') ?? 0; @endphp
                                        {{ $minPrice == 0 ? 'Gratis' : 'Rp ' . number_format($minPrice, 0, ',', '.') }}
                                    @endif
                                </span>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        @if($events->isEmpty())
        <div class="text-center py-20">
            <div class="bg-white rounded-2xl p-10 border border-gray-200 shadow-sm max-w-lg mx-auto">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="text-lg font-bold text-gray-600">Yah, Event tidak ditemukan</h3>
                <p class="text-gray-400 mt-2">Coba pilih kategori lain.</p>
            </div>
        </div>
        @endif

    </div>
</x-layouts.app>
