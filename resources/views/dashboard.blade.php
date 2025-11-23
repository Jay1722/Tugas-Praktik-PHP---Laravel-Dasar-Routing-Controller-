<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Selamat datang di Dashboard</h3>
                <p class="text-gray-700">
                    Anda login sebagai <strong>{{ Auth::user()->role }}</strong>.
                </p>

                <div class="mt-6 flex gap-4">
                    <a href="{{ route('mahasiswa.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kelola Mahasiswa</a>
                    <a href="{{ route('fakultas.index') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Kelola Fakultas</a>
                    <a href="{{ route('prodi.index') }}" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Kelola Prodi</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
