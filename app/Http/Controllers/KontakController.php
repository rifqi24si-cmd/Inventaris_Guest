<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Aset;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();
        return view('pages.Kontak.index', compact('kontak'));
    }

  

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email ',
          
            'message' => 'required|max:255',
        ]);

        Kontak::create($request->all());
        return redirect()->route('kontak.index')->with('success', 'Pesan berhasil dikirim');
    }

 


  

  
}
