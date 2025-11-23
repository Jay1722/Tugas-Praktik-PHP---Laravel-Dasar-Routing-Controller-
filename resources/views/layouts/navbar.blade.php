<nav class="bg-blue-700 text-white p-4 shadow-md">
  <div class="max-w-6xl mx-auto flex flex-wrap justify-between items-center gap-4">
    <h1 class="text-xl font-semibold">Sistem Akademik</h1>
    <ul class="flex flex-wrap gap-4">
      <li><a href="{{ route('mahasiswa.index') }}" class="hover:text-gray-200 font-medium">Mahasiswa</a></li>
      <li><a href="{{ route('prodi.index') }}" class="hover:text-gray-200 font-medium">Prodi</a></li>
      <li><a href="{{ route('fakultas.index') }}" class="hover:text-gray-200 font-medium">Fakultas</a></li>
    </ul>
  </div>
</nav>
