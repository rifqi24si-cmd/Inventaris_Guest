<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\KategoriAset;
use App\Models\Aset;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $wargas = Warga::all();
        $kategoris = KategoriAset::latest()->get();
        $asets = Aset::with('kategori')->latest()->get();

        return view('dashboard', compact('wargas', 'kategoris', 'asets'));
    }
}
