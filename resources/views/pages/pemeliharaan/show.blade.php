@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Detail Riwayat Maintenance</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('dashboard') }}" style="color: #ee626b;">Log Maintenance</a>
                        <span style="color: #eee;"> > </span>
                        <span style="color: #eee;">Log #{{ $pemeliharaan->pemeliharaan_id }}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product section" style="background-color: #1f1f1f; padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image"
                        style="background-color: #2a2a2a; padding: 50px; border-radius: 25px; border: 1px solid #333; text-align: center;">
                        <i class="fa fa-wrench" style="font-size: 150px; color: #ee626b; margin-bottom: 30px;"></i>
                        <h4 style="color: #fff; text-transform: uppercase;">Maintenance Log</h4>
                        <p style="color: #aaa;">ID Rekam: {{ $pemeliharaan->pemeliharaan_id }}</p>
                    </div>
                </div>

                <div class="col-lg-6 align-self-center">
                    <div class="right-content"
                        style="background-color: #2a2a2a; padding: 40px; border-radius: 25px; border: 1px solid #333;">
                        <h6 style="color: #ee626b; text-transform: uppercase; margin-bottom: 10px;">Deskripsi Perbaikan</h6>
                        <h2 style="color: #fff; font-size: 34px; margin-bottom: 20px;">{{ $pemeliharaan->tindakan }}</h2>

                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Aset
                                    Terkait</span>
                                <span style="color: #fff; font-weight: bold;">{{ $pemeliharaan->aset->nama_aset }}</span>
                            </li>

                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Tanggal
                                    Selesai</span>
                                <span
                                    style="color: #fff;">{{ \Carbon\Carbon::parse($pemeliharaan->tanggal)->format('d F Y') }}</span>
                            </li>

                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Total
                                    Biaya</span>
                                <span style="color: #00ffcc; font-weight: bold; font-size: 18px;">
                                    Rp {{ number_format($pemeliharaan->biaya, 0, ',', '.') }}
                                </span>
                            </li>

                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span
                                    style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Pelaksana</span>
                                <span style="color: #fff;">{{ $pemeliharaan->pelaksana }}</span>
                            </li>

                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span
                                    style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Kategori
                                    Aset</span>
                                <span style="color: #fff;">{{ $pemeliharaan->aset->kategori->nama }}</span>
                            </li>
                        </ul>

                        <div class="d-flex gap-3 mt-4">
                            <a href="{{ route('pemeliharaan.edit', $pemeliharaan->pemeliharaan_id) }}"
                                style="background-color: #f39c12; color: #fff; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; flex: 1; text-align: center;">
                                <i class="fa fa-edit"></i> Edit Log
                            </a>

                            <form action="{{ route('pemeliharaan.destroy', $pemeliharaan->pemeliharaan_id) }}" method="POST"
                                onsubmit="return confirm('Hapus rekam pemeliharaan ini?')" style="flex: 1;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    style="background-color: #ee626b; color: #fff; padding: 12px 25px; border-radius: 25px; font-weight: 600; width: 100%; border: none;">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>

                        <a href="{{ route('dashboard') }}" class="d-block text-center mt-3"
                            style="color: #aaa; text-decoration: none;">
                            <i class="fa fa-arrow-left"></i> Kembali ke Daftar Log
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection