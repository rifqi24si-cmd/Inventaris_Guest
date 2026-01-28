<?php

namespace App\Http\Controllers;

use App\Models\PelaporanAsset;;
use Illuminate\Http\Request;

class PelaporanAssetController extends Controller
{
    public function index()
    {
        $pelaporan = PelaporanAsset ::all();
        return view('pages.Pelaporan_Asset.index', compact('pelaporan'));
    }

  

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email ', 
            'nama_asset' => 'required|max:255',
            'deskripsi_laporan' => 'required|max:255',
        ]);

        PelaporanAsset::create($request->all());
        return redirect()->route('pelaporan_asset.index')->with('success', 'Pesan berhasil dikirim');
    }

 


  

  
}