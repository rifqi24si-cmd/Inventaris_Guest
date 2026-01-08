@extends('layouts.guest.app')
@section('content')
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">
                        <h6>Welcome to lugx</h6>
                        <h2>BEST GAMING SITE EVER!</h2>
                        <p>LUGX Gaming is free Bootstrap 5 HTML CSS website template for your gaming websites. You can
                            download and use this layout for commercial purposes. Please tell your friends about
                            TemplateMo.</p>
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <button role="button">Search Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="right-image">
                        <img src="assets/images/banner-image.jpg" alt="">
                        <span class="price">$22</span>
                        <span class="offer">-40%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Free Storage</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>User More</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Reply Ready</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Easy Layout</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Data Management</h6>
                        <h2>Daftar Warga</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="{{ route('warga.create') }}">+ Tambah Warga</a>
                    </div>
                </div>

                @forelse($wargas as $w)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('warga.show', $w->warga_id) }}">
                                    <img src="{{ asset('assets/images/trending-01.jpg') }}" alt="">
                                </a>
                                <span class="price">ID: {{ $w->warga_id }}</span>
                            </div>
                            <div class="down-content">
                                <span class="category">{{ $w->pekerjaan }}</span>
                                <h4 title="{{ $w->nama }}">{{ Str::limit($w->nama, 15) }}</h4>
                                <p style="color: #aaa; font-size: 13px; margin-bottom: 15px; min-height: 40px;">
                                    <i class="fa fa-id-card" style="color: #ee626b;"></i> {{ $w->no_ktp }}<br>
                                    <i class="fa fa-phone" style="color: #ee626b;"></i> {{ $w->telp }}
                                </p>

                                <div class="action-buttons d-flex justify-content-between gap-1">
                                    <a href="{{ route('warga.show', $w->warga_id) }}" class="btn-action btn-detail"
                                        title="Detail">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route('warga.edit', $w->warga_id) }}" class="btn-action btn-edit" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="{{ route('warga.destroy', $w->warga_id) }}" method="POST"
                                        onsubmit="return confirm('Yakin hapus data ini?')" class="m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-round btn-delete" title="Hapus">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12">
                        <div class="item text-center" style="padding: 50px; background-color: #2a2a2a; border-radius: 25px;">
                            <i class="fa fa-users-slash" style="font-size: 50px; color: #ee626b; margin-bottom: 20px;"></i>
                            <h4 style="color: #fff;">Belum ada data warga</h4>
                            <p style="color: #aaa;">Klik tombol "+ Tambah Warga" untuk memasukkan data baru.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="section most-played">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Asset Management</h6>
                        <h2>Kategori Aset</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="{{ route('kategori.create') }}">+ Tambah Kategori</a>
                    </div>
                </div>

                @forelse($kategoris as $k)
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="item">
                        <div class="thumb">
                            <a href="{{ route('kategori.show', $k->kategori_id) }}">
                                <img src="{{ asset('assets/images/top-game-01.jpg') }}" alt="">
                            </a>
                            <span class="price" style="background-color: #ee626b; font-size: 12px;">{{ $k->kode }}</span>
                        </div>
                        <div class="down-content">
                            <span class="category">Kategori Aset</span>
                            <h4 title="{{ $k->nama }}">{{ Str::limit($k->nama, 20) }}</h4>
                            
                            <p style="color: #666; font-size: 13px; min-height: 40px;">
                                {{ Str::limit($k->deskripsi, 45) }}
                            </p>

                            <div class="action-buttons-wrapper d-flex flex-row justify-content-center align-items-center gap-2" style="margin-top: 15px; border-top: 1px solid #eee; padding-top: 15px;">
    
                                <a href="{{ route('kategori.show', $k->kategori_id) }}" class="btn-round btn-view" title="Detail">
                                    <i class="fa fa-eye"></i>
                                </a>

                                <a href="{{ route('kategori.edit', $k->kategori_id) }}" class="btn-round btn-edit" title="Edit">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <form action="{{ route('kategori.destroy', $k->kategori_id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')" style="display: inline-block; margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-round btn-delete" title="Hapus">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-lg-12">
                        <div class="item text-center" style="padding: 50px; background-color: #2a2a2a; border-radius: 25px;">
                            <i class="fa fa-folder-open" style="font-size: 50px; color: #ee626b; margin-bottom: 20px;"></i>
                            <h4 style="color: #fff;">Belum ada kategori aset</h4>
                            <p style="color: #aaa;">Klik tombol "+ Tambah Kategori" untuk mulai mengisi data.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="section categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Categories</h6>
                        <h2>Top Categories</h2>
                    </div>
                </div>
                <div class="col-lg col-sm-6 col-xs-12">
                    <div class="item">
                        <h4>Action</h4>
                        <div class="thumb">
                            <a href="product-details.html"><img src="assets/images/categories-01.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 col-xs-12">
                    <div class="item">
                        <h4>Action</h4>
                        <div class="thumb">
                            <a href="product-details.html"><img src="assets/images/categories-05.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 col-xs-12">
                    <div class="item">
                        <h4>Action</h4>
                        <div class="thumb">
                            <a href="product-details.html"><img src="assets/images/categories-03.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 col-xs-12">
                    <div class="item">
                        <h4>Action</h4>
                        <div class="thumb">
                            <a href="product-details.html"><img src="assets/images/categories-04.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 col-xs-12">
                    <div class="item">
                        <h4>Action</h4>
                        <div class="thumb">
                            <a href="product-details.html"><img src="assets/images/categories-05.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="shop">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h6>Our Shop</h6>
                                    <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                                </div>
                                <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                                <div class="main-button">
                                    <a href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 align-self-end">
                    <div class="subscribe">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h6>NEWSLETTER</h6>
                                    <h2>Get Up To $100 Off Just Buy <em>Subscribe</em> Newsletter!</h2>
                                </div>
                                <div class="search-input">
                                    <form id="subscribe" action="#">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Your email...">
                                        <button type="submit">Subscribe Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection