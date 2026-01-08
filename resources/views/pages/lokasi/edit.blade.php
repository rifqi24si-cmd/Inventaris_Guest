@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Edit Lokasi Aset</h3>
                    <span class="breadcrumb" style="color: #eee;">Update posisi untuk: {{ $lokasi->aset->nama_aset }}</span>
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
                        <form action="{{ route('lokasi.update', $lokasi->lokasi_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <h6 style="color: #ee626b;">Update Tracking</h6>
                                    <h2 style="color: #fff;">Perbarui Data Lokasi</h2>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Pilih Aset</label>
                                    <select name="aset_id"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                        @foreach($asets as $aset)
                                            <option value="{{ $aset->aset_id }}" {{ (old('aset_id', $lokasi->aset_id) == $aset->aset_id) ? 'selected' : '' }}>
                                                {{ $aset->nama_aset }} ({{ $aset->kode_aset }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Alamat / Lokasi (Text)</label>
                                    <input type="text" name="lokasi_text"
                                        value="{{ old('lokasi_text', $lokasi->lokasi_text) }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">RT</label>
                                    <input type="text" name="rt" value="{{ old('rt', $lokasi->rt) }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">RW</label>
                                    <input type="text" name="rw" value="{{ old('rw', $lokasi->rw) }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Keterangan</label>
                                    <textarea name="keterangan" rows="3"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;">{{ old('keterangan', $lokasi->keterangan) }}</textarea>
                                </div>

                                <div class="col-lg-12 mt-4 d-flex gap-3">
                                    <button type="submit"
                                        style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; flex: 2;">PERBARUI
                                        LOKASI</button>
                                    <a href="{{ route('dashboard') }}"
                                        style="background-color: #444; color: #fff; padding: 15px 30px; border-radius: 25px; text-decoration: none; text-align: center; flex: 1;">BATAL</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection