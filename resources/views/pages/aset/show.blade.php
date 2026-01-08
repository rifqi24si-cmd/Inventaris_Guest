@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Detail Aset</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('aset.index') }}" style="color: #ee626b;">Daftar Aset</a>
                        <span style="color: #eee;"> > </span>
                        <span style="color: #eee;">{{ $aset->kode_aset }}</span>
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
                        <img src="{{ asset('assets/images/trending-02.jpg') }}" alt=""
                            style="border-radius: 20px; width: 100%; max-width: 500px;">
                        <div class="mt-4">
                            <span
                                style="background-color: #ee626b; color: white; padding: 10px 25px; border-radius: 20px; font-weight: bold; text-transform: uppercase;">
                                {{ $aset->kondisi }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 align-self-center">
                    <div class="right-content"
                        style="background-color: #2a2a2a; padding: 40px; border-radius: 25px; border: 1px solid #333;">
                        <h6 style="color: #ee626b; text-transform: uppercase; margin-bottom: 10px;">
                            {{ $aset->kategori->nama }}</h6>
                        <h2 style="color: #fff; font-size: 34px; margin-bottom: 20px;">{{ $aset->nama_aset }}</h2>

                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">ID
                                    Aset</span>
                                <span style="color: #fff;">#{{ $aset->aset_id }}</span>
                            </li>
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Kode
                                    Aset</span>
                                <span style="color: #fff;">{{ $aset->kode_aset }}</span>
                            </li>
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Tgl
                                    Perolehan</span>
                                <span
                                    style="color: #fff;">{{ \Carbon\Carbon::parse($aset->tgl_perolehan)->format('d M Y') }}</span>
                            </li>
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #444; padding-bottom: 10px;">
                                <span style="color: #ee626b; font-weight: 600; width: 150px; display: inline-block;">Nilai
                                    Perolehan</span>
                                <span style="color: #fff;">Rp
                                    {{ number_format($aset->nilai_perolehan, 0, ',', '.') }}</span>
                            </li>
                        </ul>

                        <div class="d-flex gap-3 mt-4">
                            <a href="{{ route('aset.edit', $aset->aset_id) }}"
                                style="background-color: #f39c12; color: #fff; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; flex: 1; text-align: center;">
                                <i class="fa fa-edit"></i> Edit Data
                            </a>

                            <form action="{{ route('aset.destroy', $aset->aset_id) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus aset ini?')" style="flex: 1;">
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
                            <i class="fa fa-arrow-left"></i> Kembali ke Daftar Aset
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection