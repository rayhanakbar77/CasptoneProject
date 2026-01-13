<x-layouts.admin title="Manajemen Kategori">
    <div class="container mx-auto p-6 lg:p-10">
        <div class="card bg-base-100 shadow-xl border border-gray-100">
            <div class="card-body p-0">
                <div class="flex flex-col sm:flex-row justify-between items-center p-6 border-b border-gray-100">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Kategori Event</h1>
                        <p class="text-sm text-gray-500 mt-1">Kelola kategori untuk pengelompokan event.</p>
                    </div>
                    <button onclick="add_modal.showModal()" class="btn btn-primary btn-sm sm:btn-md mt-4 sm:mt-0 gap-2 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Tambah Kategori
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead class="bg-gray-50 text-gray-600 font-semibold uppercase text-xs tracking-wider">
                            <tr>
                                <th class="py-4 pl-6 text-left w-16">#</th>
                                <th class="py-4 text-left">Nama Kategori</th>
                                <th class="py-4 pr-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($categories as $category)
                                <tr class="hover:bg-gray-50 transition-colors duration-200">
                                    <th class="pl-6 text-gray-500 font-medium">{{ $loop->iteration }}</th>
                                    <td class="font-semibold text-gray-700">{{ $category->nama }}</td>
                                    <td class="pr-6">
                                        <div class="flex justify-center gap-2">
                                            <button class="btn btn-square btn-ghost btn-sm text-blue-600 hover:bg-blue-100"
                                                onclick="openEditModal(this)" data-id="{{ $category->id }}"
                                                data-nama="{{ $category->nama }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" /></svg>
                                            </button>
                                            <button class="btn btn-square btn-ghost btn-sm text-red-600 hover:bg-red-100"
                                                onclick="openDeleteModal(this)" data-id="{{ $category->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 000-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-8 text-gray-400">
                                        Belum ada kategori yang ditambahkan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t border-gray-100">
                    {{-- {{ $categories->links() }} --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Masukkan Modal Add, Edit, Delete yang sudah ada sebelumnya di sini --}}
    <dialog id="add_modal" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg mb-4">Tambah Kategori Baru</h3>
            <form method="POST" action="{{ route('admin.categories.store') }}">
                @csrf
                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text font-medium">Nama Kategori</span>
                    </label>
                    <input type="text" name="nama" placeholder="Misal: Konser Musik" class="input input-bordered w-full" required />
                </div>
                <div class="modal-action">
                    <button type="button" class="btn btn-ghost" onclick="add_modal.close()">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </dialog>

    <dialog id="edit_modal" class="modal">
        <form method="POST" class="modal-box">
            @csrf
            @method('PUT')
            <h3 class="font-bold text-lg mb-4">Edit Kategori</h3>
            <input type="hidden" name="id" id="edit_id">
            <div class="form-control w-full mb-4">
                <label class="label"><span class="label-text font-medium">Nama Kategori</span></label>
                <input type="text" name="nama" id="edit_nama" class="input input-bordered w-full" required />
            </div>
            <div class="modal-action">
                <button type="button" class="btn btn-ghost" onclick="edit_modal.close()">Batal</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </dialog>

    <dialog id="delete_modal" class="modal">
        <form method="POST" class="modal-box">
            @csrf
            @method('DELETE')
            <h3 class="font-bold text-lg text-red-600">Hapus Kategori</h3>
            <p class="py-4">Apakah Anda yakin ingin menghapus kategori ini? Data yang dihapus tidak dapat dikembalikan.</p>
            <div class="modal-action">
                <button type="button" class="btn btn-ghost" onclick="delete_modal.close()">Batal</button>
                <button type="submit" class="btn btn-error text-white">Hapus</button>
            </div>
        </form>
    </dialog>

    <script>
        function openEditModal(button) {
            const id = button.dataset.id;
            const nama = button.dataset.nama;
            const form = document.querySelector('#edit_modal form');
            form.action = `/admin/categories/${id}`;
            document.getElementById('edit_nama').value = nama;
            document.getElementById('edit_modal').showModal();
        }
        function openDeleteModal(button) {
            const id = button.dataset.id;
            const form = document.querySelector('#delete_modal form');
            form.action = `/admin/categories/${id}`;
            document.getElementById('delete_modal').showModal();
        }
    </script>
</x-layouts.admin>
