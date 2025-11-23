<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Daftar Program Studi') }}
        </h2>
        <nav class="mt-2">
        </nav>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-700 dark:text-gray-700">

                    {{-- Tombol tambah prodi --}}
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('prodi.create') }}" 
                           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow transition">
                            + Tambah Prodi
                        </a>
                    </div>

                    {{-- Tabel daftar prodi --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-100 rounded-lg">
                            <thead class="bg-blue-600 text-white">
                                <tr>
                                    <th class="px-4 py-2 text-center border">ID</th>
                                    <th class="px-4 py-2 text-center border">Nama Prodi</th>
                                    <th class="px-4 py-2 text-center border">Fakultas</th>
                                    <th class="px-4 py-2 text-center border">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prodi as $p)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-100 transition">
                                        <td class="px-4 py-2 border text-center">{{ $p->id }}</td>
                                        <td class="px-4 py-2 border text-center">{{ $p->nama_prodi }}</td>
                                        <td class="px-4 py-2 border text-center">
                                            <a href="{{ route('fakultas.index') }}" 
                                               class="text-blue-600 hover:text-blue-800 hover:underline dark:text-blue-400 dark:hover:text-blue-300">
                                                {{ $p->fakultas->nama_fakultas }}
                                            </a>
                                        </td>
                                        <td class="px-4 py-2 border text-center">
                                            <div class="flex justify-center gap-2">
                                                <a href="{{ route('prodi.edit', $p->id) }}" 
                                                   class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded-lg shadow-md transition">
                                                    ✏️ Edit
                                                </a>
                                                <form action="{{ route('prodi.destroy', $p->id) }}" method="POST" 
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
