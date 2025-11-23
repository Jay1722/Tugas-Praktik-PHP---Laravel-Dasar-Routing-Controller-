<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-700">

                    {{-- Pesan sukses --}}
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-800 px-4 py-2 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Tombol tambah mahasiswa --}}
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('mahasiswa.create') }}" 
                           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow transition">
                            + Tambah Mahasiswa
                        </a>
                    </div>

                    {{-- Tabel daftar mahasiswa --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300 rounded-lg">
                            <thead class="bg-white text-black">
                                <tr>
                                    <th class="px-4 py-2 text-left border">ID</th>
                                    <th class="px-4 py-2 text-left border">NIM</th>
                                    <th class="px-4 py-2 text-left border">Nama</th>
                                    <th class="px-4 py-2 text-left border">Prodi</th>
                                    <th class="px-4 py-2 text-center border">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswa as $m)
                                    <tr class="hover:bg-gray-200 dark:hover:bg-gray-200 transition">
                                        <td class="px-4 py-2 border">{{ $m->id }}</td>
                                        <td class="px-4 py-2 border">{{ $m->nim }}</td>
                                        <td class="px-4 py-2 border">{{ $m->nama }}</td>
                                        <td class="px-4 py-2 border text-blue-600">
                                            <a href="{{ route('prodi.index') }}" 
                                               class="hover:underline hover:text-blue-800 dark:hover:text-blue-400">
                                                {{ $m->prodi }}
                                            </a>
                                        </td>
                                        <td class="px-4 py-2 border text-center">
                                            <div class="flex justify-center gap-2">
                                                <a href="{{ route('mahasiswa.edit', $m->id) }}" 
                                                   class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded-lg shadow-md transition">
                                                    ✏️ Edit
                                                </a>
                                                <form action="{{ route('mahasiswa.destroy', $m->id) }}" 
                                                      method="POST" 
                                                      onsubmit="return confirm('Yakin ingin hapus?')">
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
