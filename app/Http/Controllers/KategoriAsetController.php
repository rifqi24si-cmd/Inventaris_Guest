<?php

namespace App\Http\Controllers;

use App\Models\KategoriAset;
use Illuminate\Http\Request;

class KategoriAsetController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        return view('dashboard',);
    }

    // Menampilkan form tambah (Opsional jika ingin pakai halaman terpisah)
    public function create()
    {
        return view('pages.kategori.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'kode' => 'required|unique:kategori_aset,kode',
            'deskripsi' => 'nullable'
        ]);

        KategoriAset::create($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Kategori aset berhasil ditambahkan!');
    }

    // Menampilkan detail (Opsional)
    public function show($id)
    {
        $kategori = KategoriAset::findOrFail($id);
        return view('pages.kategori.show', compact('kategori'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $kategori = KategoriAset::findOrFail($id);
        return view('pages.kategori.edit', compact('kategori'));
    }

    // Memperbarui data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'kode' => 'required|unique:kategori_aset,kode,' . $id . ',kategori_id',
            'deskripsi' => 'nullable'
        ]);

        $kategori = KategoriAset::findOrFail($id);
        $kategori->update($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Kategori aset berhasil diperbarui!');
    }

    // Menghapus data
    public function destroy($id)
    {
        $kategori = KategoriAset::findOrFail($id);
        $kategori->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Kategori aset berhasil dihapus!');
    }
}