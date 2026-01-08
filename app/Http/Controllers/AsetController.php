<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\KategoriAset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    // Menampilkan daftar semua aset
    public function index()
    {
        // Eager loading 'kategori' untuk mengoptimalkan query
        $asets = Aset::with('kategori')->latest()->get();
        return view('aset.index', compact('asets'));
    }

    // Menampilkan form tambah aset
    public function create()
    {
        // Mengambil semua kategori untuk dropdown di form
        $kategoris = KategoriAset::all();
        return view('pages.aset.create', compact('kategoris'));
    }

    // Menyimpan data aset baru
    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori_aset,kategori_id',
            'kode_aset' => 'required|unique:aset,kode_aset',
            'nama_aset' => 'required|string|max:255',
            'tgl_perolehan' => 'required|date',
            'nilai_perolehan' => 'required|numeric',
            'kondisi' => 'required|string',
        ]);

        Aset::create($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Aset baru berhasil ditambahkan!');
    }

    // Menampilkan detail satu aset
    public function show($id)
    {
        $aset = Aset::with('kategori')->findOrFail($id);
        return view('pages.aset.show', compact('aset'));
    }

    // Menampilkan form edit aset
    public function edit($id)
    {
        $aset = Aset::findOrFail($id);
        $kategoris = KategoriAset::all();
        return view('pages.aset.edit', compact('aset', 'kategoris'));
    }

    // Memperbarui data aset
    public function update(Request $request, $id)
    {
        $aset = Aset::findOrFail($id);

        $request->validate([
            'kategori_id' => 'required|exists:kategori_aset,kategori_id',
            'kode_aset' => 'required|unique:aset,kode_aset,' . $aset->aset_id . ',aset_id',
            'nama_aset' => 'required|string|max:255',
            'tgl_perolehan' => 'required|date',
            'nilai_perolehan' => 'required|numeric',
            'kondisi' => 'required|string',
        ]);

        $aset->update($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Data aset berhasil diperbarui!');
    }

    // Menghapus data aset
    public function destroy($id)
    {
        $aset = Aset::findOrFail($id);
        $aset->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Aset telah berhasil dihapus!');
    }
}