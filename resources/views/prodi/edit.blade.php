<div class="max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Edit Prodi</h1>
    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <input type="text" name="kode_prodi" value="{{ $prodi->kode_prodi }}" class="border p-2 w-full rounded">
        <input type="text" name="nama_prodi" value="{{ $prodi->nama_prodi }}" class="border p-2 w-full rounded">
        <select name="fakultas_id" class="border p-2 w-full rounded">
            @foreach($fakultas as $f)
                <option value="{{ $f->id }}" {{ $f->id == $prodi->fakultas_id ? 'selected' : '' }}>
                    {{ $f->nama_fakultas }}
                </option>
            @endforeach
        </select>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
