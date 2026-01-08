@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Tambah Aset Baru</h3>
                    <span class="breadcrumb"><a href="{{ route('aset.index') }}" style="color: #ee626b;">Daftar Aset</a> >
                        Tambah Data</span>
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
                        <form action="{{ route('aset.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <h6 style="color: #ee626b; text-transform: uppercase;">Asset Details</h6>
                                    <h2 style="color: #fff;">Input Data Aset</h2>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">Kategori
                                        Aset</label>
                                    <select name="kategori_id"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                        <option value="" disabled selected>Pilih Kategori...</option>
                                        @foreach($kategoris as $k)
                                            <option value="{{ $k->kategori_id }}" {{ old('kategori_id') == $k->kategori_id ? 'selected' : '' }}>
                                                {{ $k->nama }} ({{ $k->kode }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">Kode Aset</label>
                                    <input type="text" name="kode_aset" value="{{ old('kode_aset') }}"
                                        placeholder="Contoh: AST-001"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">Nama Aset</label>
                                    <input type="text" name="nama_aset" value="{{ old('nama_aset') }}"
                                        placeholder="Masukkan nama barang/aset"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">Tanggal
                                        Perolehan</label>
                                    <input type="date" name="tgl_perolehan" value="{{ old('tgl_perolehan') }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">Nilai Perolehan
                                        (Rp)</label>
                                    <input type="number" name="nilai_perolehan" value="{{ old('nilai_perolehan') }}"
                                        placeholder="0"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label style="color: #ee626b; font-weight: 600; margin-bottom: 10px;">Kondisi</label>
                                    <select name="kondisi"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                        <option value="Baik" {{ old('kondisi') == 'Baik' ? 'selected' : '' }}>Baik</option>
                                        <option value="Rusak Ringan" {{ old('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>
                                            Rusak Ringan</option>
                                        <option value="Rusak Berat" {{ old('kondisi') == 'Rusak Berat' ? 'selected' : '' }}>
                                            Rusak Berat</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <button type="submit"
                                        style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; width: 100%;">SIMPAN
                                        DATA ASET</button>
                                    <a href="{{ route('aset.index') }}" class="btn d-block text-center mt-3"
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