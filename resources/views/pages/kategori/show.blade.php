@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Detail Kategori Aset</h3>
                    <span class="breadcrumb" style="background: none;">
                        <a href="{{ route('dashboard') }}" style="color: #ee626b;">Dashboard</a>
                        <span style="color: #eee;"> > </span>
                        <a href="{{ route('kategori.index') }}" style="color: #ee626b;">Kategori Aset</a>
                        <span style="color: #eee;"> > {{ $kategori->nama }} </span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product section" style="background-color: #1f1f1f; padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image" style="position: relative;">
                        <img src="{{ asset('assets/images/top-game-01.jpg') }}" alt=""
                            style="border-radius: 25px; border: 5px solid #2a2a2a; width: 100%;">
                        <span
                            style="position: absolute; right: 20px; top: 20px; background-color: #ee626b; color: #fff; padding: 10px 25px; border-radius: 25px; font-weight: 700; font-size: 20px;">
                            {{ $kategori->kode }}
                        </span>
                    </div>
                </div>

                <div class="col-lg-6 align-self-center">
                    <span class="category"
                        style="color: #ee626b; text-transform: uppercase; font-weight: 700; letter-spacing: 1px;">Asset
                        Category ID: {{ $kategori->kategori_id }}</span>
                    <h4 style="color: #fff; font-size: 32px; margin-top: 10px; margin-bottom: 20px;">{{ $kategori->nama }}
                    </h4>

                    <div class="info-list">
                        <div style="margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid #333;">
                            <h6 style="color: #ee626b; margin-bottom: 10px; font-size: 14px; text-transform: uppercase;">
                                Deskripsi Kategori:</h6>
                            <p style="color: #ccc; line-height: 28px; font-size: 16px;">
                                {{ $kategori->deskripsi ?: 'Tidak ada deskripsi untuk kategori ini.' }}
                            </p>
                        </div>
                    </div>

                    <div class="main-button mt-5 d-flex gap-3">
                        <a href="{{ route('dashboard') }}"
                            style="background-color: #333; color: #fff; padding: 12px 30px; border-radius: 25px; text-decoration: none; font-weight: 600;">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                        <a href="{{ route('kategori.edit', $kategori->kategori_id) }}"
                            style="background-color: #ee626b; color: #fff; padding: 12px 30px; border-radius: 25px; text-decoration: none; font-weight: 600;">
                            <i class="fa fa-edit"></i> Edit Kategori
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection