<x-layouts.admin title="Riwayat Transaksi">
    <div class="container mx-auto p-6 lg:p-10">
        <div class="card bg-base-100 shadow-xl border border-gray-100">
            <div class="card-body p-0">
                <div class="p-6 border-b border-gray-100 bg-white rounded-t-2xl">
                    <div class="flex justify-between items-center">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-800">Riwayat Transaksi</h1>
                            <p class="text-sm text-gray-500 mt-1">Pantau seluruh pemasukan tiket secara real-time.</p>
                        </div>
                        <div class="stats shadow bg-gray-50 border border-gray-100">
                            <div class="stat py-2 px-4">
                                <div class="stat-title text-xs">Total Transaksi</div>
                                <div class="stat-value text-primary text-xl">{{ $histories->count() }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead class="bg-gray-50 text-gray-600 font-semibold uppercase text-xs tracking-wider">
                            <tr>
                                <th class="py-4 pl-6 text-left">Order ID</th>
                                <th class="py-4 text-left">Pembeli</th>
                                <th class="py-4 text-left">Event</th>
                                <th class="py-4 text-right">Total Bayar</th>
                                <th class="py-4 text-center">Tanggal</th>
                                <th class="py-4 pr-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($histories as $history)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="pl-6 font-mono text-xs text-gray-500">#{{ $history->id }}</td>
                                    <td class="font-medium text-gray-800">{{ $history->user->name }}</td>
                                    <td>
                                        <div class="text-sm font-semibold text-gray-700">{{ $history->event?->judul ?? 'Event Dihapus' }}</div>
                                    </td>
                                    <td class="text-right font-bold text-gray-800">
                                        Rp {{ number_format($history->total_harga, 0, ',', '.') }}
                                    </td>
                                    <td class="text-center text-sm text-gray-500">
                                        {{ $history->created_at->format('d M Y') }}
                                        <br>
                                        <span class="text-xs">{{ $history->created_at->format('H:i') }}</span>
                                    </td>
                                    <td class="pr-6 text-center">
                                        <a href="{{ route('admin.histories.show', $history->id) }}" class="btn btn-sm btn-ghost text-primary hover:bg-primary hover:text-white transition-all">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-10 text-gray-400">
                                        Belum ada data transaksi.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
