<div class="max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Edit Fakultas</h1>
    <form action="{{ route('fakultas.update', $fakulta->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <input type="text" name="kode_fakultas" value="{{ $fakulta->kode_fakultas }}" class="border p-2 w-full rounded">
        <input type="text" name="nama_fakultas" value="{{ $fakulta->nama_fakultas }}" class="border p-2 w-full rounded">
        <button class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
