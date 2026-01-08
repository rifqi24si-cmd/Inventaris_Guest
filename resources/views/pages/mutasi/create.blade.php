@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Catat Mutasi Baru</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('dashboard') }}" style="color: #ee626b;">Riwayat Mutasi</a>
                        <span style="color: #eee;"> > Tambah Log</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page section" style="background-color: #1f1f1f; padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="contact-form"
                        style="background-color: #2a2a2a; padding: 40px; border-radius: 25px; border: 1px solid #333;">
                        <form action="{{ route('mutasi.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <h6 style="color: #ee626b; text-transform: uppercase;">Movement System</h6>
                                    <h2 style="color: #fff;">Formulir Mutasi Aset</h2>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Pilih Aset yang Bermutasi</label>
                                    <select name="aset_id"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                        <option value="" disabled selected>Pilih Aset...</option>
                                        @foreach($asets as $aset)
                                            <option value="{{ $aset->aset_id }}">{{ $aset->nama_aset }} [{{ $aset->kode_aset }}]
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Tanggal Mutasi</label>
                                    <input type="date" name="tanggal" value="{{ date('Y-m-d') }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Jenis Mutasi</label>
                                    <input type="text" name="jenis_mutasi" placeholder="Misal: Hibah Keluar / Pindahan RT"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Keterangan / Alasan</label>
                                    <textarea name="keterangan" rows="4"
                                        placeholder="Jelaskan detail alasan atau tujuan mutasi aset..."
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"></textarea>
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <button type="submit"
                                        style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; width: 100%;">PROSES
                                        MUTASI</button>
                                    <a href="{{ route('dashboard') }}" class="btn d-block text-center mt-3"
                                        style="color: #aaa;">Batalkan</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection