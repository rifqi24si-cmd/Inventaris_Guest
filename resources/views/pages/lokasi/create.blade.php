@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Plot Lokasi Aset</h3>
                    <span class="breadcrumb"><a href="{{ route('dashboard') }}" style="color: #ee626b;">Daftar Lokasi</a>
                        > Tambah Baru</span>
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
                        <form action="{{ route('lokasi.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <h6 style="color: #ee626b; text-transform: uppercase;">Tracking Details</h6>
                                    <h2 style="color: #fff;">Input Lokasi Baru</h2>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">Pilih Aset</label>
                                    <select name="aset_id"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                        <option value="" disabled selected>Cari Aset...</option>
                                        @foreach($asets as $aset)
                                            <option value="{{ $aset->aset_id }}" {{ old('aset_id') == $aset->aset_id ? 'selected' : '' }}>
                                                {{ $aset->nama_aset }} ({{ $aset->kode_aset }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">Alamat / Lokasi
                                        (Nama Gedung/Jalan)</label>
                                    <input type="text" name="lokasi_text" value="{{ old('lokasi_text') }}"
                                        placeholder="Contoh: Gedung Serbaguna Lt. 2"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">RT</label>
                                    <input type="text" name="rt" value="{{ old('rt') }}" placeholder="001" maxlength="5"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">RW</label>
                                    <input type="text" name="rw" value="{{ old('rw') }}" placeholder="005" maxlength="5"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">Keterangan
                                        Tambahan</label>
                                    <textarea name="keterangan" rows="3"
                                        placeholder="Misal: Berada di pojok ruangan dekat jendela"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;">{{ old('keterangan') }}</textarea>
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <button type="submit"
                                        style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; width: 100%;">SIMPAN
                                        DATA LOKASI</button>
                                    <a href="{{ route('dashboard') }}" class="btn d-block text-center mt-3"
                                        style="color: #aaa;">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection