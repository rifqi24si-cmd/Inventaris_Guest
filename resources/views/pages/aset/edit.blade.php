@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Edit Aset</h3>
                    <span class="breadcrumb" style="color: #eee;">Update Informasi: {{ $aset->nama_aset }}</span>
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
                        <form action="{{ route('aset.update', $aset->aset_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <h6 style="color: #ee626b;">Edit Category & Details</h6>
                                    <h2 style="color: #fff;">Perbarui Data Aset</h2>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Kategori Aset</label>
                                    <select name="kategori_id"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                        @foreach($kategoris as $k)
                                            <option value="{{ $k->kategori_id }}" {{ (old('kategori_id', $aset->kategori_id) == $k->kategori_id) ? 'selected' : '' }}>
                                                {{ $k->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Kode Aset</label>
                                    <input type="text" name="kode_aset" value="{{ old('kode_aset', $aset->kode_aset) }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Nama Aset</label>
                                    <input type="text" name="nama_aset" value="{{ old('nama_aset', $aset->nama_aset) }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Tanggal Perolehan</label>
                                    <input type="date" name="tgl_perolehan"
                                        value="{{ old('tgl_perolehan', $aset->tgl_perolehan) }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Nilai Perolehan (Rp)</label>
                                    <input type="number" name="nilai_perolehan"
                                        value="{{ old('nilai_perolehan', round($aset->nilai_perolehan)) }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Kondisi</label>
                                    <select name="kondisi"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                        @foreach(['Baik', 'Rusak Ringan', 'Rusak Berat'] as $kondisi)
                                            <option value="{{ $kondisi }}" {{ old('kondisi', $aset->kondisi) == $kondisi ? 'selected' : '' }}>{{ $kondisi }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-12 mt-4 d-flex gap-3">
                                    <button type="submit"
                                        style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; flex: 2;">UPDATE
                                        DATA</button>
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