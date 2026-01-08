@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Tambah Kategori Aset</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('dashboard') }}" style="color: #ee626b;">Dashboard</a>
                        <span style="color: #eee;"> > </span>
                        <a href="{{ route('kategori.index') }}" style="color: #ee626b;">Kategori Aset</a>
                        <span style="color: #eee;"> > Tambah Baru </span>
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
                                        <h6 style="color: #ee626b;">New Category</h6>
                                        <h2 style="color: #fff;">Input Kategori Aset</h2>
                                    </div>
                                </div>

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

                                <form action="{{ route('kategori.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Kode
                                                    Kategori</label>
                                                <input type="text" name="kode" value="{{ old('kode') }}"
                                                    placeholder="Contoh: ELEK, MBL"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <label class="mb-2" style="color: #ee626b; font-weight: 600;">Nama
                                                    Kategori</label>
                                                <input type="text" name="nama" value="{{ old('nama') }}"
                                                    placeholder="Contoh: Elektronik"
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px;"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label class="mb-2"
                                                    style="color: #ee626b; font-weight: 600;">Deskripsi</label>
                                                <textarea name="deskripsi"
                                                    placeholder="Penjelasan singkat mengenai kategori ini..."
                                                    style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%; margin-bottom: 20px; height: 120px;">{{ old('deskripsi') }}</textarea>
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-12 mt-4 d-flex gap-3">
                                            <button type="submit" class="orange-button"
                                                style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; text-transform: uppercase; flex: 1;">Simpan
                                                Kategori</button>
                                            <a href="{{ route('kategori.index') }}"
                                                style="background-color: #444; color: #fff; padding: 15px 30px; border-radius: 25px; text-decoration: none; text-align: center; flex: 1;">Kembali</a>
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
        /* Transisi untuk tombol simpan */
        .orange-button:hover {
            background-color: #fff !important;
            color: #ee626b !important;
            transition: 0.3s;
        }
    </style>
@endsection