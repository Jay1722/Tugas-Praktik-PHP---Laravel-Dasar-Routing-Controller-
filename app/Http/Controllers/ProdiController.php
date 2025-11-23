<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::with('fakultas')->get();
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        $fakultas = Fakultas::all(); // ambil semua fakultas untuk dropdown
        return view('prodi.create', compact('fakultas'));
    }

    public function store(Request $request)
    {
    $request->validate([
        'kode_prodi' => 'required|string|max:10|unique:prodi,kode_prodi',
        'nama_prodi' => 'required|string|max:255',
        'fakultas_id' => 'required|exists:fakultas,id', // ubah ini
        ]);

    Prodi::create([
        'kode_prodi' => $request->kode_prodi,
        'nama_prodi' => $request->nama_prodi,
        'fakultas_id' => $request->fakultas_id, // ubah ini juga
        ]);

    return redirect()->route('prodi.index')->with('success', 'Prodi berhasil ditambahkan!');
    }

}
