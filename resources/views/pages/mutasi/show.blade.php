@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Detail Riwayat Mutasi</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('dashboard') }}" style="color: #ee626b;">Riwayat Mutasi</a>
                        <span style="color: #eee;"> > </span>
                        <span style="color: #eee;">Log Mutasi #{{ $mutasi->mutasi_id }}</span>
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
                        <i class="fa fa-exchange" style="font-size: 150px; color: #ee626b; margin-bottom: 30px;"></i>
                        <h4 style="color: #fff; text-transform: uppercase;">Asset Movement</h4>
                        <p style="color: #aaa;">Status: {{ $mutasi->jenis_mutasi }}</p>
                    </div>
                </div>

                <div class="col-lg-6 align-self-center">
                    <div class="right-content"
                        style="background-color: #2a2a2a; padding: 40px; border-radius: 25px; border: 1px solid #333;">
                        <h6 style="color: #ee626b; text-transform: uppercase; margin-bottom: 10px;">Informasi Mutasi</h6>
                        <h2 style="color: #fff; font-size: 34px; margin-bottom: 20px;">{{ $mutasi->aset->nama_aset }}</h2>

                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Tanggal
                                    Mutasi</span>
                                <span
                                    style="color: #fff;">{{ \Carbon\Carbon::parse($mutasi->tanggal)->format('d F Y') }}</span>
                            </li>

                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Jenis
                                    Mutasi</span>
                                <span style="color: #fff; font-weight: bold;">{{ $mutasi->jenis_mutasi }}</span>
                            </li>

                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span
                                    style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Keterangan</span>
                                <span
                                    style="color: #aaa; font-style: italic;">"{{ $mutasi->keterangan ?: 'Tidak ada catatan tambahan' }}"</span>
                            </li>

                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Kode
                                    Aset</span>
                                <span style="color: #fff;">{{ $mutasi->aset->kode_aset }}</span>
                            </li>
                        </ul>

                        <div class="d-flex gap-3 mt-4">
                            <a href="{{ route('mutasi.edit', $mutasi->mutasi_id) }}"
                                style="background-color: #f39c12; color: #fff; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; flex: 1; text-align: center;">
                                <i class="fa fa-pencil"></i> Edit Riwayat
                            </a>

                            <form action="{{ route('mutasi.destroy', $mutasi->mutasi_id) }}" method="POST"
                                onsubmit="return confirm('Hapus catatan mutasi ini?')" style="flex: 1;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    style="background-color: #ee626b; color: #fff; padding: 12px 25px; border-radius: 25px; font-weight: 600; width: 100%; border: none;">
                                    <i class="fa fa-trash"></i> Hapus Log
                                </button>
                            </form>
                        </div>

                        <a href="{{ route('dashboard') }}" class="d-block text-center mt-3"
                            style="color: #aaa; text-decoration: none;">
                            <i class="fa fa-arrow-left"></i> Kembali ke Daftar Mutasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection