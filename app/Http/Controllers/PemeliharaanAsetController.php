<?php

namespace App\Http\Controllers;

use App\Models\PemeliharaanAset;
use App\Models\Aset;
use Illuminate\Http\Request;

class PemeliharaanAsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemeliharaans = PemeliharaanAset::with('aset')->latest()->get();
        return view('pemeliharaan.index', compact('pemeliharaans'));
    }

    public function create()
    {
        $asets = Aset::all();
        return view('pages.pemeliharaan.create', compact('asets'));
    }

    public function store(Request $request)
    {
        PemeliharaanAset::create($request->all());
        return redirect()->route('dashboard');
    }

    public function show($id)
    {
        $pemeliharaan = PemeliharaanAset::with('aset')->findOrFail($id);
        return view('pages.pemeliharaan.show', compact('pemeliharaan'));
    }

    public function edit($id)
    {
        $pemeliharaan = PemeliharaanAset::findOrFail($id);
        $asets = Aset::all();
        return view('pages.pemeliharaan.edit', compact('pemeliharaan', 'asets'));
    }

    public function update(Request $request, $id)
    {
        $p = PemeliharaanAset::findOrFail($id);
        $p->update($request->all());
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        PemeliharaanAset::destroy($id);
        return redirect()->route('dashboard');
    }
}
