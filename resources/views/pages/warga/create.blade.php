@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Tambah Data</h3>
                    <span class="breadcrumb"><a href="{{ route('dashboard') }}">Dashboard</a> > Tambah Warga</span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="right-content">
                        <div id="contact-form">
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <div class="section-heading">
                                        <h6>Citizen Entry</h6>
                                        <h2>Input Data Warga Baru</h2>
                                    </div>
                                </div>

                                {{-- 1. Pesan Sukses (Jika data berhasil disimpan) --}}
                                @if (session('success'))
                                    <div class="alert alert-success border-0 mb-4" 
                                         style="background-color: #2ecc71; color: white; border-radius: 15px; padding: 15px;">
                                        <i class="fa fa-check-circle"></i> {{ session('success') }}
                                    </div>
                                @endif

                                {{-- 2. Pesan Error Session (Jika ada error sistem) --}}
                                @if (session('error'))
                                    <div class="alert alert-danger border-0 mb-4" 
                                         style="background-color: #ee626b; color: white; border-radius: 15px; padding: 15px;">
                                        <i class="fa fa-exclamation-triangle"></i> {{ session('error') }}
                                    </div>
                                @endif

                                {{-- 3. Pesan Error Validasi (Input tidak sesuai aturan) --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger border-0 mb-4"
                                        style="background-color: #ee626b; color: white; border-radius: 15px; padding: 15px;">
                                        <h6 class="text-white mb-2"><i class="fa fa-times-circle"></i> Periksa kembali inputan Anda:</h6>
                                        <ul class="mb-0" style="list-style: none; padding-left: 0;">
                                            @foreach ($errors->all() as $error)
                                                <li><small>- {{ $error }}</small></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                
                                <form action="{{ route('warga.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="text-white mb-2">Nomor KTP</label>
                                                <input type="text" name="no_ktp" placeholder="Masukkan 16 digit NIK"
                                                    value="{{ old('no_ktp') }}" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="text-white mb-2">Nama Lengkap</label>
                                                <input type="text" name="nama" placeholder="Nama sesuai KTP"
                                                    value="{{ old('nama') }}" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="text-white mb-2">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-select custom-select">
                                                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="text-white mb-2">Agama</label>
                                                <input type="text" name="agama" placeholder="Contoh: Islam"
                                                    value="{{ old('agama') }}" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="text-white mb-2">Pekerjaan</label>
                                                <input type="text" name="pekerjaan" placeholder="Contoh: Karyawan Swasta"
                                                    value="{{ old('pekerjaan') }}" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="text-white mb-2">Nomor Telepon</label>
                                                <input type="text" name="telp" placeholder="0812xxxx"
                                                    value="{{ old('telp') }}" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label class="text-white mb-2">Alamat Email</label>
                                                <input type="email" name="email" placeholder="nama@email.com"
                                                    value="{{ old('email') }}" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="orange-button">Simpan Data
                                                    Warga</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #contact-form {
            background-color: #2a2a2a;
            padding: 40px;
            border-radius: 25px;
        }

        #contact-form input,
        .custom-select {
            background-color: #3a3a3a !important;
            border: 1px solid #444 !important;
            color: #fff !important;
            margin-bottom: 20px;
            border-radius: 20px !important;
            padding: 12px 20px !important;
            width: 100%;
        }

        .custom-select {
            height: 50px;
            appearance: none;
        }

        .orange-button {
            width: 100%;
            background-color: #ee626b !important;
            color: #fff !important;
            border: none !important;
            padding: 15px !important;
            border-radius: 25px !important;
            font-weight: 600 !important;
            text-transform: uppercase !important;
        }

        .orange-button:hover {
            background-color: #fff !important;
            color: #ee626b !important;
        }
    </style>
@endsection