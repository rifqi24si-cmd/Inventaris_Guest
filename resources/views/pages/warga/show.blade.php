@extends('layouts.guest.app')

@section('content')
<div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color: #fff;">Detail Warga</h3>
                <span class="breadcrumb" style="background: none;">
                    <a href="{{ route('dashboard') }}" style="color: #ee626b;">Dashboard</a> 
                    <span style="color: #eee;"> > </span>
                    <a href="{{ route('dashboard') }}" style="color: #ee626b;">Daftar Warga</a> 
                    <span style="color: #eee;"> > {{ $warga->nama }} </span>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="single-product section" style="background-color: #1f1f1f; padding: 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-image">
                    <img src="https://i.pravatar.cc/600?u={{ $warga->no_ktp }}" alt="" style="border-radius: 25px; border: 5px solid #2a2a2a;">
                    <span class="price" style="background-color: #ee626b; color: #fff;">ID: {{ $warga->warga_id }}</span>
                </div>
            </div>

            <div class="col-lg-6 align-self-center">
                <span class="category" style="color: #ee626b; text-transform: uppercase; font-weight: 700;">{{ $warga->pekerjaan }}</span>
                <h4 style="color: #fff; font-size: 28px; margin-top: 10px;">{{ $warga->nama }}</h4>
                
                <div class="info-list mt-4">
                    <ul style="list-style: none; padding: 0;">
                        <li class="info-item">
                            <strong>No. KTP</strong> 
                            <span>: {{ $warga->no_ktp }}</span>
                        </li>
                        <li class="info-item">
                            <strong>Jenis Kelamin</strong> 
                            <span>: {{ $warga->jenis_kelamin }}</span>
                        </li>
                        <li class="info-item">
                            <strong>Agama</strong> 
                            <span>: {{ $warga->agama }}</span>
                        </li>
                        <li class="info-item">
                            <strong>Telepon</strong> 
                            <span>: {{ $warga->telp }}</span>
                        </li>
                        <li class="info-item">
                            <strong>Email</strong> 
                            <span>: {{ $warga->email }}</span>
                        </li>
                    </ul>
                </div>

                <div class="main-button mt-5 d-flex gap-3">
                    <a href="{{ route('dashboard') }}" class="btn-back">Kembali</a>
                    <a href="{{ route('warga.edit', $warga->warga_id) }}" class="btn-edit-profile">Edit Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styling khusus untuk kontras teks */
    .info-item {
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #333;
        font-size: 16px;
    }
    .info-item strong {
        color: #ee626b; /* Warna Pink Lugx untuk Label */
        width: 130px;
        display: inline-block;
    }
    .info-item span {
        color: #ffffff !important; /* Memaksa teks isi menjadi putih terang */
    }

    /* Tombol Custom */
    .btn-back {
        background-color: #333 !important;
        color: #fff !important;
        padding: 12px 25px !important;
        border-radius: 25px !important;
        text-decoration: none;
    }
    .btn-edit-profile {
        background-color: #ee626b !important;
        color: #fff !important;
        padding: 12px 25px !important;
        border-radius: 25px !important;
        text-decoration: none;
    }
    .btn-back:hover, .btn-edit-profile:hover {
        opacity: 0.8;
        color: #fff !important;
    }
</style>
@endsection