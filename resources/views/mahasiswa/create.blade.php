<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mahasiswa</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-5 text-center">Tambah Mahasiswa</h1>

    @if ($errors->any())
      <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
        <ul class="list-disc pl-5">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label class="block font-semibold mb-2">NIM</label>
        <input type="text" name="nim" class="border rounded w-full p-2" value="{{ old('nim') }}">
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-2">Nama</label>
        <input type="text" name="nama" class="border rounded w-full p-2" value="{{ old('nama') }}">
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-2">Prodi</label>
        <input type="text" name="prodi" class="border rounded w-full p-2" value="{{ old('prodi') }}">
      </div>

      <div class="flex justify-between items-center">
        <a href="{{ route('mahasiswa.index') }}" class="text-gray-600 hover:text-gray-800">← Kembali</a>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
      </div>
    </form>
  </div>
</body>
</html>
