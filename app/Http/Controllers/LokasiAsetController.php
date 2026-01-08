<?php

namespace App\Http\Controllers;

use App\Models\LokasiAset;
use App\Models\Aset;
use Illuminate\Http\Request;

class LokasiAsetController extends Controller
{
    public function index()
    {
        $lokasis = LokasiAset::with('aset')->latest()->get();
        return view('lokasi.index', compact('lokasis'));
    }

    public function create()
    {
        $asets = Aset::all(); // Diperlukan untuk dropdown pilih aset
        return view('pages.lokasi.create', compact('asets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'aset_id' => 'required|exists:aset,aset_id',
            'lokasi_text' => 'required',
            'rt' => 'required',
            'rw' => 'required'
        ]);

        LokasiAset::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Lokasi aset berhasil disimpan.');
    }

    public function edit($id)
    {
        $lokasi = LokasiAset::findOrFail($id);
        $asets = Aset::all();
        return view('lokasi.edit', compact('lokasi', 'asets'));
    }

    public function update(Request $request, $id)
    {
        $lokasi = LokasiAset::findOrFail($id);
        $lokasi->update($request->all());
        return redirect()->route('dasboard')->with('success', 'Data lokasi diperbarui.');
    }

    public function show($id)
    {
        $lokasi = LokasiAset::with('aset')->findOrFail($id);

        return view('pages.lokasi.show', compact('lokasi'));
    }

    public function destroy($id)
    {
        LokasiAset::destroy($id);
        return redirect()->route('lokasi.index');
    }
}