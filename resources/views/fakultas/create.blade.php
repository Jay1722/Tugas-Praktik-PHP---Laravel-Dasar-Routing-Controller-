<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Fakultas</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
  @include('layouts.navbar')

  <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-blue-700 text-center">Tambah Fakultas</h1>

    <form action="{{ route('fakultas.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Kode Fakultas</label>
            <input type="text" name="kode_fakultas"
                class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300"
                placeholder="Contoh: FT" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Nama Fakultas</label>
            <input type="text" name="nama_fakultas"
               class="w-full border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300"
               placeholder="Contoh: Fakultas Teknik" required>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('fakultas.index') }}" 
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg transition">
            ← Kembali
            </a>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </div>
</form>

  </div>
</body>
</html>
