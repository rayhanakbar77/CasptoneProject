<x-layouts.admin title="Detail Transaksi #{{ $order->id }}">
    <div class="container mx-auto p-6 lg:p-10">
        <a href="{{ route('admin.histories.index') }}" class="btn btn-ghost btn-sm gap-2 mb-6 text-gray-500 hover:text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
            Kembali ke Riwayat
        </a>

        <div class="flex flex-col lg:flex-row gap-6">
            <div class="w-full lg:w-1/3">
                <div class="card bg-white shadow-lg border border-gray-100 overflow-hidden">
                    <figure class="h-48 w-full bg-gray-200 relative">
                        @if($order->event && $order->event->gambar)
                            <img src="{{ asset('images/events/' . $order->event->gambar) }}" alt="Event" class="w-full h-full object-cover">
                        @else
                            <div class="flex items-center justify-center h-full text-gray-400">No Image</div>
                        @endif
                        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h2 class="text-white font-bold text-lg shadow-black drop-shadow-md">{{ $order->event?->judul ?? 'Event Tidak Ditemukan' }}</h2>
                        </div>
                    </figure>
                    <div class="card-body p-5">
                        <div class="flex items-start gap-3">
                            <div class="mt-1 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-700">Lokasi</p>
                                <p class="text-sm text-gray-500">{{ $order->event?->lokasi ?? '-' }}</p>
                            </div>
                        </div>
                        <div class="divider my-2"></div>
                        <div class="flex items-start gap-3">
                            <div class="mt-1 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" /></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-700">Jadwal Event</p>
                                <p class="text-sm text-gray-500">
                                    {{ $order->event ? $order->event->tanggal_waktu->format('d F Y, H:i') : '-' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-2/3">
                <div class="card bg-white shadow-lg border border-gray-100">
                    <div class="card-body p-6 lg:p-8">
                        <div class="flex justify-between items-start mb-6 border-b border-gray-100 pb-4">
                            <div>
                                <p class="text-sm text-gray-400 uppercase tracking-wide">Invoice ID</p>
                                <h1 class="text-2xl font-bold font-mono text-gray-800">#{{ $order->id }}</h1>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-400">Tanggal Pembelian</p>
                                <p class="font-medium text-gray-700">{{ $order->created_at->format('d M Y, H:i') }}</p>
                            </div>
                        </div>

                        <div class="mb-6 bg-gray-50 p-4 rounded-lg">
                            <p class="text-xs text-gray-500 uppercase font-bold mb-1">Informasi Pembeli</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $order->user->name }}</p>
                            <p class="text-sm text-gray-600">{{ $order->user->email }}</p>
                        </div>

                        <h3 class="text-md font-bold text-gray-700 mb-3">Rincian Tiket</h3>
                        <div class="overflow-hidden rounded-lg border border-gray-200 mb-6">
                            <table class="table w-full">
                                <thead class="bg-gray-50 text-gray-600">
                                    <tr>
                                        <th>Tipe Tiket</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-right">Harga Satuan</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->detailOrders as $detail)
                                    <tr class="border-b border-gray-100 last:border-none">
                                        <td class="font-medium">
                                            {{ $detail->tiket->tipe }}
                                            <span class="block text-xs text-gray-400">Tiket Masuk</span>
                                        </td>
                                        <td class="text-center">{{ $detail->jumlah }}</td>
                                        <td class="text-right text-gray-500">
                                            {{ number_format($detail->subtotal_harga / $detail->jumlah, 0, ',', '.') }}
                                        </td>
                                        <td class="text-right font-semibold text-gray-700">
                                            Rp {{ number_format($detail->subtotal_harga, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="flex justify-end">
                            <div class="w-full sm:w-1/2">
                                <div class="flex justify-between items-center py-4 border-t-2 border-primary border-dashed">
                                    <span class="text-lg font-bold text-gray-800">TOTAL BAYAR</span>
                                    <span class="text-2xl font-bold text-primary">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
