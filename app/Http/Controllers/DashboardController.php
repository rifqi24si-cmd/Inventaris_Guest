<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\KategoriAset;
use App\Models\Aset;
use App\Models\LokasiAset;
use App\Models\PemeliharaanAset;
use App\Models\MutasiAset;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        $wargas = Warga::all();
        $kategoris = KategoriAset::latest()->get();
        $asets = Aset::with('kategori')->latest()->get();
        $lokasis = LokasiAset::with('aset')->latest()->get();
        $pemeliharaans = PemeliharaanAset::with('aset')->latest()->get();
        $mutasis = MutasiAset::with('aset')->latest()->get();

        return view('dashboard', compact('wargas', 'kategoris', 'asets', 'lokasis', 'pemeliharaans', 'mutasis', 'users'));
    }
}
