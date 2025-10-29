<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    // Menampilkan daftar fakultas
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('fakultas.index', compact('fakultas'));
    }

    // 🟢 Form untuk menambah fakultas baru
    public function create()
    {
        return view('fakultas.create');
    }

    // 🟢 Menyimpan data fakultas baru
    public function store(Request $request)
    {
    $request->validate([
        'kode_fakultas' => 'required|string|max:10|unique:fakultas,kode_fakultas',
        'nama_fakultas' => 'required|string|max:255',
        ]);

    Fakultas::create([
        'kode_fakultas' => $request->kode_fakultas,
        'nama_fakultas' => $request->nama_fakultas,
        ]);

    return redirect()->route('fakultas.index')->with('success', 'Fakultas berhasil ditambahkan!');
    }


    // 🟢 Form untuk mengedit fakultas
    public function edit($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        return view('fakultas.edit', compact('fakultas'));
    }

    // 🟢 Memperbarui data fakultas
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_fakultas' => 'required|string|max:255',
        ]);

        $fakultas = Fakultas::findOrFail($id);
        $fakultas->update([
            'nama_fakultas' => $request->nama_fakultas,
        ]);

        return redirect()->route('fakultas.index')->with('success', 'Fakultas berhasil diperbarui!');
    }

    // 🟢 Menghapus fakultas
    public function destroy($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->delete();

        return redirect()->route('fakultas.index')->with('success', 'Fakultas berhasil dihapus!');
    }
    
}
