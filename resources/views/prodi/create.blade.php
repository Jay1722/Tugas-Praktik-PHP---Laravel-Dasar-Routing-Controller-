<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Prodi</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-5 text-center">Tambah Program Studi</h1>

    @if ($errors->any())
      <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
        <ul class="list-disc pl-5">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('prodi.store') }}" method="POST">
      @csrf

      <div class="mb-4">
        <label class="block font-semibold mb-2">Kode Prodi</label>
        <input type="text" name="kode_prodi" class="border rounded w-full p-2" value="{{ old('kode_prodi') }}" placeholder="Masukkan kode prodi">
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-2">Nama Prodi</label>
        <input type="text" name="nama_prodi" class="border rounded w-full p-2" value="{{ old('nama_prodi') }}" placeholder="Masukkan nama prodi">
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-2">Fakultas</label>
        <select name="fakultas_id" class="border rounded w-full p-2">
          <option value="">-- Pilih Fakultas --</option>
          @foreach($fakultas as $f)
            <option value="{{ $f->id }}" {{ old('fakultas_id') == $f->id ? 'selected' : '' }}>
              {{ $f->nama_fakultas }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="flex justify-between items-center">
        <a href="{{ route('prodi.index') }}" class="text-gray-600 hover:text-gray-800">← Kembali</a>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
      </div>
    </form>
  </div>
</body>
</html>
