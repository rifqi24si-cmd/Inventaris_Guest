@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Tentang Asset-Track</h3>
                    <span class="breadcrumb">
                        <a href="/" style="color: #ee626b;">Beranda</a>
                        <span style="color: #eee;"> > Tentang Kami</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="about-section section" style="background-color: #1f1f1f; padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        {{-- Visual representasi data atau teknologi --}}
                        <img src="{{ asset('assets/images/hp.jpg') }}" alt="Sistem Manajemen Aset"
                            style="border-radius: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading" style="margin-bottom: 30px;">
                        <h6 style="color: #ee626b; text-transform: uppercase;">Smart Inventory Solutions</h6>
                        <h2 style="color: #fff;">Sistem Monitoring Aset Terpadu</h2>
                    </div>
                    <p style="color: #aaa; line-height: 28px; margin-bottom: 25px;">
                        <strong>Asset-Track</strong> adalah platform manajemen inventaris yang dirancang untuk memberikan
                        transparansi penuh terhadap siklus hidup aset organisasi Anda. Dari pengadaan hingga penghapusan,
                        setiap pergerakan tercatat secara akurat.
                    </p>
                    <p style="color: #aaa; line-height: 28px;">
                        Kami memahami bahwa aset adalah investasi berharga. Oleh karena itu, sistem ini difokuskan pada tiga
                        pilar utama: <strong>Keamanan Data</strong>, <strong>Kemudahan Pelacakan</strong>, dan
                        <strong>Akuntabilitas Pemeliharaan</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="features-section" style="background-color: #2a2a2a; padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="feature-item" style="padding: 30px; background: #333; border-radius: 20px;">
                        <i class="fa fa-map-marker" style="font-size: 40px; color: #ee626b; margin-bottom: 20px;"></i>
                        <h4 style="color: #fff; font-size: 18px;">Lacak Lokasi</h4>
                        <p style="color: #aaa; font-size: 14px;">Pantau posisi fisik aset hingga tingkat RT/RW secara
                            akurat.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="feature-item" style="padding: 30px; background: #333; border-radius: 20px;">
                        <i class="fa fa-wrench" style="font-size: 40px; color: #ee626b; margin-bottom: 20px;"></i>
                        <h4 style="color: #fff; font-size: 18px;">Maintenance</h4>
                        <p style="color: #aaa; font-size: 14px;">Catat riwayat perbaikan untuk menjaga kondisi aset tetap
                            prima.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="feature-item" style="padding: 30px; background: #333; border-radius: 20px;">
                        <i class="fa fa-exchange" style="font-size: 40px; color: #ee626b; margin-bottom: 20px;"></i>
                        <h4 style="color: #fff; font-size: 18px;">Mutasi Cepat</h4>
                        <p style="color: #aaa; font-size: 14px;">Dokumentasikan setiap perpindahan tangan atau perubahan
                            status.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="feature-item" style="padding: 30px; background: #333; border-radius: 20px;">
                        <i class="fa fa-shield" style="font-size: 40px; color: #ee626b; margin-bottom: 20px;"></i>
                        <h4 style="color: #fff; font-size: 18px;">Multi-Role</h4>
                        <p style="color: #aaa; font-size: 14px;">Pembagian hak akses antara Admin dan Staff untuk keamanan
                            data.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection