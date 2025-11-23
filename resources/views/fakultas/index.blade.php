<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 leading-tight">
            {{ __('Daftar Fakultas') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-xl p-6">
                
                {{-- Notifikasi sukses --}}
                @if(session('success'))
                    <div class="bg-green-100 text-green-800 p-3 rounded mb-4 border border-green-300">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Tombol Tambah --}}
                <div class="flex justify-end mb-6">
                    <a href="{{ route('fakultas.create') }}" 
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                        + Tambah Fakultas
                    </a>
                </div>

                {{-- Tabel Data Fakultas --}}
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-200 rounded-lg overflow-hidden text-center">
                        <thead>
                            <tr class="bg-blue-600 text-white">
                                <th class="p-3 border text-center">ID</th>
                                <th class="p-3 border text-center">Nama Fakultas</th>
                                <th class="p-3 border text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($fakultas as $f)
                                <tr class="hover:bg-gray-100 transition">
                                    <td class="p-3">{{ $f->id }}</td>
                                    <td class="p-3">{{ $f->nama_fakultas }}</td>
                                    <td class="p-3 min-w-[180px]">
                                        <div class="flex justify-center gap-2">
                                            <a href="{{ route('fakultas.edit', $f->id) }}" 
                                               class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded-lg shadow-md transition">
                                                ✏️ Edit
                                            </a>

                                            <form action="{{ route('fakultas.destroy', $f->id) }}" 
                                                  method="POST" 
                                                  onsubmit="return confirm('Yakin ingin hapus fakultas ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg shadow-md transition">
                                                    🗑️ Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="p-4 text-gray-500">Belum ada data fakultas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
