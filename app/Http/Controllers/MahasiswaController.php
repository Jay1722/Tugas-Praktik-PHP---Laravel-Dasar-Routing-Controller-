<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('id','desc')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim|min:4',
            'nama' => 'required',
            'prodi' => 'required'
        ]);

        Mahasiswa::create($request->only('nim','nama','prodi'));

        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa disimpan.');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required|min:4|unique:mahasiswa,nim,'.$mahasiswa->id,
            'nama' => 'required',
            'prodi' => 'required'
        ]);

        $mahasiswa->update($request->only('nim','nama','prodi'));

        return redirect()->route('mahasiswa.index')->with('success','Data mahasiswa diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa dihapus.');
    }
}
