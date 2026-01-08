@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Detail Titik Lokasi</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('lokasi.index') }}" style="color: #ee626b;">Daftar Lokasi</a>
                        <span style="color: #eee;"> > </span>
                        <span style="color: #eee;">RT {{ $lokasi->rt }} / RW {{ $lokasi->rw }}</span>
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
                        style="background-color: #2a2a2a; padding: 20px; border-radius: 25px; border: 1px solid #333; text-align: center;">
                        {{-- Placeholder gambar lokasi/peta --}}
                        <img src="{{ asset('assets/images/trending-03.jpg') }}" alt=""
                            style="border-radius: 20px; width: 100%; filter: grayscale(0.5);">
                        <div class="mt-4">
                            <h4 style="color: #fff;">{{ $lokasi->rt }} / {{ $lokasi->rw }}</h4>
                            <p style="color: #ee626b; font-weight: bold; text-transform: uppercase;">Kode Area Tracking</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 align-self-center">
                    <div class="right-content"
                        style="background-color: #2a2a2a; padding: 40px; border-radius: 25px; border: 1px solid #333;">
                        <h6 style="color: #ee626b; text-transform: uppercase; margin-bottom: 10px;">Informasi Penempatan
                        </h6>
                        <h2 style="color: #fff; font-size: 34px; margin-bottom: 20px;">{{ $lokasi->lokasi_text }}</h2>

                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Nama
                                    Aset</span>
                                <span style="color: #fff; font-weight: bold;">{{ $lokasi->aset->nama_aset }}</span>
                            </li>
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Kode
                                    Aset</span>
                                <span style="color: #fff;">{{ $lokasi->aset->kode_aset }}</span>
                            </li>
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span
                                    style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Wilayah</span>
                                <span style="color: #fff;">RT {{ $lokasi->rt }} / RW {{ $lokasi->rw }}</span>
                            </li>
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span
                                    style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Keterangan</span>
                                <span
                                    style="color: #aaa; font-style: italic;">"{{ $lokasi->keterangan ?: 'Tidak ada catatan tambahan' }}"</span>
                            </li>
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span
                                    style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Terakhir
                                    Update</span>
                                <span style="color: #fff;">{{ $lokasi->updated_at->format('d M Y, H:i') }}</span>
                            </li>
                        </ul>

                        <div class="d-flex gap-3 mt-4">
                            <a href="{{ route('lokasi.edit', $lokasi->lokasi_id) }}"
                                style="background-color: #f39c12; color: #fff; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; flex: 1; text-align: center;">
                                <i class="fa fa-pencil"></i> Edit Lokasi
                            </a>

                            <form action="{{ route('lokasi.destroy', $lokasi->lokasi_id) }}" method="POST"
                                onsubmit="return confirm('Hapus data titik lokasi ini?')" style="flex: 1;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    style="background-color: #ee626b; color: #fff; padding: 12px 25px; border-radius: 25px; font-weight: 600; width: 100%; border: none;">
                                    <i class="fa fa-trash"></i> Hapus Plot
                                </button>
                            </form>
                        </div>

                        <a href="{{ route('dashboard') }}" class="d-block text-center mt-3"
                            style="color: #aaa; text-decoration: none;">
                            <i class="fa fa-arrow-left"></i> Kembali ke Daftar Lokasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection