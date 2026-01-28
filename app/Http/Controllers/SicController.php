<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SicController extends Controller
{
    public function cekInput($input)
    {
        if (!is_numeric($input)) return "Input harus angka";

        $val = (int)$input;

        // Logika Tahun (Input > 1000)
        if ($val > 1000) {
            $usia = 2026 - $val; // Tahun sekarang 2026
            if ($usia >= 17) {
                return redirect()->route('dashboard'); // Redirect ke dashboard
            } else {
                return view('hasil_sic', [
                    'pesan' => "Halaman ini untuk 17 Tahun ke atas",
                    'status' => "Gagal"
                ]);
            }
        } 
        
        // Logika Angka Biasa
        else {
            $jenis = ($val % 2 == 0) ? "Genap" : "Ganjil";
            return view('hasil_sic', [
                'pesan' => "Angka $val adalah bilangan $jenis",
                'status' => "Berhasil"
            ]);
        }
    }
}