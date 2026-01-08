<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\KategoriAset;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $wargas = Warga::all();
        $kategoris = KategoriAset::latest()->get();
        return view('dashboard', compact('wargas', 'kategoris'));
    }
}
