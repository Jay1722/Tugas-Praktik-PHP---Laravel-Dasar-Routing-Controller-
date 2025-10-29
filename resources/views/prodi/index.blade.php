<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Prodi</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-blue-700 text-white px-6 py-3 flex justify-between items-center shadow">
    <h1 class="text-lg font-semibold">Sistem Akademik</h1>
    <div class="space-x-6">
      <a href="{{ route('mahasiswa.index') }}" class="hover:underline">Mahasiswa</a>
      <a href="{{ route('prodi.index') }}" class="hover:underline font-bold">Prodi</a>
      <a href="{{ route('fakultas.index') }}" class="hover:underline">Fakultas</a>
    </div>
  </nav>

  <!-- Container -->
  <div class="max-w-5xl mx-auto bg-white p-6 mt-10 rounded-2xl shadow-md">
    <h2 class="text-3xl font-bold mb-6 text-center">Daftar Program Studi</h2>

    <div class="flex justify-end mb-4">
      <a href="{{ route('prodi.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium shadow">
        + Tambah Prodi
      </a>
    </div>

    <table class="w-full border border-gray-300 text-sm rounded-md overflow-hidden">
      <thead>
        <tr class="bg-blue-600 text-white text-left">
          <th class="p-3 border border-gray-300 w-16 text-center">ID</th>
          <th class="p-3 border border-gray-300 text-center">Nama Prodi</th>
          <th class="p-3 border border-gray-300 text-center">Fakultas</th>
          <th class="p-3 border border-gray-300 text-center w-40">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($prodi as $p)
        <tr class="hover:bg-gray-50">
          <td class="border border-gray-300 p-3 text-center">{{ $p->id }}</td>
          <td class="border border-gray-300 p-3 text-center">{{ $p->nama_prodi }}</td>
          <td class="border border-gray-300 p-3 text-center">
            <a href="{{ route('fakultas.index', $p->fakultas->id) }}" class="text-blue-600 hover:underline">
              {{ $p->fakultas->nama_fakultas }}
            </a>
          </td>
          <td class="border border-gray-300 p-3 text-center">
            <div class="flex justify-center gap-2">
              <a href="{{ route('prodi.edit', $p->id) }}" 
                 class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded-md shadow">
                ✏️ Edit
              </a>
              <form action="{{ route('prodi.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="bg-red-600 hover:bg-red-700 text-black px-3 py-1 rounded-md shadow">
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

</body>
</html>
