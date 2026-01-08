<?php

namespace App\Http\Controllers;
use App\Models\MutasiAset;
use App\Models\Aset;
use Illuminate\Http\Request;

class MutasiAsetController extends Controller
{
    public function index()
    {
        $mutasis = MutasiAset::with('aset')->latest()->get();
        return view('mutasi.index', compact('mutasis'));
    }

    public function create()
    {
        $asets = Aset::all();
        return view('pages.mutasi.create', compact('asets'));
    }

    public function store(Request $request)
    {
        MutasiAset::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data mutasi berhasil dicatat.');
    }

    public function show($id)
    {
        $mutasi = MutasiAset::with('aset')->findOrFail($id);
        return view('pages.mutasi.show', compact('mutasi'));
    }

    public function edit($id)
    {
        $mutasi = MutasiAset::findOrFail($id);
        $asets = Aset::all();
        return view('pages.mutasi.edit', compact('mutasi', 'asets'));
    }

    public function update(Request $request, $id)
    {
        $m = MutasiAset::findOrFail($id);
        $m->update($request->all());
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        MutasiAset::destroy($id);
        return redirect()->route('dashboard');
    }
}
