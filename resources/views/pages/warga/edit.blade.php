@extends('layouts.guest.app')
@section('content')
    {{-- Header dengan background gelap paksa agar teks putih terlihat --}}
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Edit Data Warga</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('dashboard') }}" style="color: #ee626b;">Dashboard</a>
                        <span style="color: #eee;"> > </span>
                        <span style="color: #eee;">Edit: {{ $warga->nama }}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page section" style="background-color: #1f1f1f; padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="right-content">
                        <div id="contact-form"
                            style="background-color: #2a2a2a; padding: 40px; border-radius: 25px; border: 1px solid #333;">
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <div class="section-heading">
                                        <h6 style="color: #ee626b;">Update Information</h6>
                                        <h2 style="color: #fff;">Perbarui Data Warga</h2>
                                    </div>
                                </div>

                                {{-- Tampilan Error Validasi --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger border-0 mb-4"
                                        style="background-color: #ee626b; color: white; border-radius: 15px;">
                                        <ul class="mb-0" style="list-style: none; padding: 0;">
                                            @foreach ($errors->all() as $error)
                                                <li><i class="fa fa-exclamation-circle"></i> {{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('warga.update', $warga->warga_id) }}" method="POST">
                                    @csrf
                                    @method('PUT') {{-- PENTING: Untuk Update data di Laravel --}}

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Nomor
                                                    KTP</label>
                                                <input type="text" name="no_ktp" value="{{ old('no_ktp', $warga->no_ktp) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Nama
                                                    Lengkap</label>
                                                <input type="text" name="nama" value="{{ old('nama', $warga->nama) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Jenis
                                                    Kelamin</label>
                                                <select name="jenis_kelamin"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px; height: 50px;">
                                                    <option value="Laki-laki" @selected(old('jenis_kelamin', $warga->jenis_kelamin) == 'Laki-laki')>Laki-laki</option>
                                                    <option value="Perempuan" @selected(old('jenis_kelamin', $warga->jenis_kelamin) == 'Perempuan')>Perempuan</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Agama</label>
                                                <input type="text" name="agama" value="{{ old('agama', $warga->agama) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2"
                                                    style="color: #ee626b; font-weight: 600;">Pekerjaan</label>
                                                <input type="text" name="pekerjaan"
                                                    value="{{ old('pekerjaan', $warga->pekerjaan) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Nomor
                                                    Telepon</label>
                                                <input type="text" name="telp" value="{{ old('telp', $warga->telp) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Alamat
                                                    Email</label>
                                                <input type="email" name="email" value="{{ old('email', $warga->email) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 mt-4 d-flex gap-3">
                                            <button type="submit" class="orange-button"
                                                style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; text-transform: uppercase; flex: 1;">Update
                                                Data</button>
                                            <a href="{{ route('dashboard') }}"
                                                style="background-color: #444; color: #fff; padding: 15px 30px; border-radius: 25px; text-decoration: none; text-align: center; flex: 1;">Batal</a>
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
        .orange-button:hover {
            background-color: #fff !important;
            color: #ee626b !important;
            transition: 0.3s;
        }
    </style>
@endsection@extends('layouts.guest.app')

@section('content')
    {{-- Header dengan background gelap paksa agar teks putih terlihat --}}
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Edit Data Warga</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('dashboard') }}" style="color: #ee626b;">Dashboard</a>
                        <span style="color: #eee;"> > </span>
                        <span style="color: #eee;">Edit: {{ $warga->nama }}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page section" style="background-color: #1f1f1f; padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="right-content">
                        <div id="contact-form"
                            style="background-color: #2a2a2a; padding: 40px; border-radius: 25px; border: 1px solid #333;">
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <div class="section-heading">
                                        <h6 style="color: #ee626b;">Update Information</h6>
                                        <h2 style="color: #fff;">Perbarui Data Warga</h2>
                                    </div>
                                </div>

                                {{-- Tampilan Error Validasi --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger border-0 mb-4"
                                        style="background-color: #ee626b; color: white; border-radius: 15px;">
                                        <ul class="mb-0" style="list-style: none; padding: 0;">
                                            @foreach ($errors->all() as $error)
                                                <li><i class="fa fa-exclamation-circle"></i> {{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('warga.update', $warga->warga_id) }}" method="POST">
                                    @csrf
                                    @method('PUT') {{-- PENTING: Untuk Update data di Laravel --}}

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Nomor
                                                    KTP</label>
                                                <input type="text" name="no_ktp" value="{{ old('no_ktp', $warga->no_ktp) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Nama
                                                    Lengkap</label>
                                                <input type="text" name="nama" value="{{ old('nama', $warga->nama) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Jenis
                                                    Kelamin</label>
                                                <select name="jenis_kelamin"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px; height: 50px;">
                                                    <option value="Laki-laki" @selected(old('jenis_kelamin', $warga->jenis_kelamin) == 'Laki-laki')>Laki-laki</option>
                                                    <option value="Perempuan" @selected(old('jenis_kelamin', $warga->jenis_kelamin) == 'Perempuan')>Perempuan</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Agama</label>
                                                <input type="text" name="agama" value="{{ old('agama', $warga->agama) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2"
                                                    style="color: #ee626b; font-weight: 600;">Pekerjaan</label>
                                                <input type="text" name="pekerjaan"
                                                    value="{{ old('pekerjaan', $warga->pekerjaan) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Nomor
                                                    Telepon</label>
                                                <input type="text" name="telp" value="{{ old('telp', $warga->telp) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Alamat
                                                    Email</label>
                                                <input type="email" name="email" value="{{ old('email', $warga->email) }}"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 mt-4 d-flex gap-3">
                                            <button type="submit" class="orange-button"
                                                style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; text-transform: uppercase; flex: 1;">Update
                                                Data</button>
                                            <a href="{{ route('dashboard') }}"
                                                style="background-color: #444; color: #fff; padding: 15px 30px; border-radius: 25px; text-decoration: none; text-align: center; flex: 1;">Batal</a>
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
        .orange-button:hover {
            background-color: #fff !important;
            color: #ee626b !important;
            transition: 0.3s;
        }
    </style>
@endsection