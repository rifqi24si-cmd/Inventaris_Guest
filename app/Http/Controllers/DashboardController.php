<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $wargas = Warga::all();
        return view('dashboard', compact('wargas'));
    }
}
