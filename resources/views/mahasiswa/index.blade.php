<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Mahasiswa</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
  @include('layouts.navbar')

  <div class="max-w-6xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-md">
    <h1 class="text-3xl font-bold mb-6 text-blue-700 text-center">Daftar Mahasiswa</h1>

    @if(session('success'))
      <div class="bg-green-100 text-green-800 p-3 rounded mb-4 border border-green-300">
        {{ session('success') }}
      </div>
    @endif

    <div class="flex justify-end mb-4">
      <a href="{{ route('mahasiswa.create') }}" 
         class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
         + Tambah Mahasiswa
      </a>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full border-collapse rounded-lg overflow-hidden">
        <thead>
          <tr class="bg-blue-600 text-white text-left">
            <th class="p-3 border">ID</th>
            <th class="p-3 border">NIM</th>
            <th class="p-3 border">Nama</th>
            <th class="p-3 border">Prodi</th>
            <th class="p-3 border text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($mahasiswa as $m)
            <tr class="hover:bg-gray-50 transition text-center">
              <td class="border p-3">{{ $m->id }}</td>
              <td class="border p-3">{{ $m->nim }}</td>
              <td class="border p-3 text-left">{{ $m->nama }}</td>
              <td class="border p-3 text-blue-600 text-left">
                <a href="{{ route('prodi.index') }}" class="hover:underline hover:text-blue-800">
                  {{ $m->prodi }}
                </a>
              </td>
              <td class="border p-3 text-center min-w-[180px]">
               <div class="flex justify-center gap-2">
                <a href="{{ route('mahasiswa.edit', $m->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded-lg shadow-md transition">
                  ✏️ Edit
                </a>
                <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="bg-red-600 hover:bg-red-700 text-black px-3 py-1 rounded-lg shadow-md transition">
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
</body>
</html>
