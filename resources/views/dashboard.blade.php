@extends('layouts.guest.app')
@section('content')
    <div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="caption header-text">
                    <h6>Sistem Monitoring & Inventaris</h6>
                    <h2>KELOLA ASET JADI LEBIH MUDAH!</h2>
                    <p>
                        <strong>Asset-Track</strong> adalah solusi modern untuk memantau riwayat pemeliharaan, 
                        perpindahan lokasi, dan mutasi aset secara real-time. Tingkatkan efisiensi manajemen 
                        inventaris Anda dengan data yang akurat dan terintegrasi.
                    </p>
                    <div class="search-input">
                        <form id="search" action="{{ route('aset.index') }}" method="GET">
                            <input type="text" placeholder="Cari Nama atau Kode Aset..." id='searchText' name="search" />
                            <button role="button">Cari Aset</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2">
                <div class="right-image">
                    {{-- Menggunakan gambar bertema kantor/gudang/teknologi --}}
                    <img src="{{ asset('assets/images/hp.jpg') }}" alt="Asset Management">
                    
                    {{-- Mengubah badge harga menjadi statistik ringkas --}}
                    <span class="price">Aset: {{ $totalAset ?? '0' }}</span>
                    <span class="offer">Aktif</span>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>User Management</h6>
                        <h2>Daftar Pengguna</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="{{ route('user.create') }}">+ Tambah User Baru</a>
                    </div>
                </div>

                @forelse($users as $u)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('user.show', $u->id) }}">
                                    {{-- Placeholder gambar profil --}}
                                    <img src="{{ asset('assets/images/user.png') }}" alt="">
                                </a>
                                {{-- Menampilkan Role sebagai badge (Warna merah untuk admin, abu-abu untuk user) --}}
                                <span class="price" style="background-color: {{ $u->role == 'admin' ? '#ee626b' : '#444' }}; font-size: 11px;">
                                    {{ strtoupper($u->role) }}
                                </span>
                            </div>
                            <div class="down-content">
                                {{-- Menampilkan Email sebagai sub-title --}}
                                <span class="category">{{ $u->email }}</span>
                                <h4 title="{{ $u->name }}">{{ Str::limit($u->name, 18) }}</h4>

                                {{-- Informasi Tambahan (Tanggal Bergabung) --}}
                                <p style="color: #aaa; font-size: 13px; margin-bottom: 15px; min-height: 40px;">
                                    <i class="fa fa-calendar" style="color: #ee626b;"></i> 
                                    Joined: {{ $u->created_at->format('d M Y') }}
                                </p>

                                <div class="action-buttons-wrapper d-flex justify-content-center align-items-center gap-2 mt-3 pt-3"
                                    style="border-top: 1px solid #444;">

                                    <a href="{{ route('user.show', $u->id) }}" class="btn-round btn-detail" title="Detail">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route('user.edit', $u->id) }}" class="btn-round btn-edit" title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    {{-- Form Hapus (Hanya muncul jika bukan user yang sedang login sendiri) --}}
                                    @if(Auth::id() !== $u->id)
                                        <form action="{{ route('user.destroy', $u->id) }}" method="POST"
                                            onsubmit="return confirm('Hapus akun ini?')" class="m-0 d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-round btn-delete" title="Hapus">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12">
                        <div class="item text-center" style="padding: 50px; background-color: #2a2a2a; border-radius: 25px;">
                            <i class="fa fa-users" style="font-size: 50px; color: #ee626b; margin-bottom: 20px;"></i>
                            <h4 style="color: #fff;">Belum ada user terdaftar</h4>
                            <p style="color: #aaa;">Klik "+ Tambah User Baru" untuk mengelola akses aplikasi.</p>
                        </div>
                    </div>
                @endforelse
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
                                    <img src="{{ asset('assets/images/user.png') }}" alt="">
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
                                    <img src="{{ asset('assets/images/plc.png') }}" alt="">
                                </a>
                                <span class="price" style="background-color: #ee626b; font-size: 12px;">{{ $k->kode }}</span>
                            </div>
                            <div class="down-content">
                                <span class="category">Kategori Aset</span>
                                <h4 title="{{ $k->nama }}">{{ Str::limit($k->nama, 20) }}</h4>

                                <p style="color: #666; font-size: 13px; min-height: 40px;">
                                    {{ Str::limit($k->deskripsi, 45) }}
                                </p>

                                <div class="action-buttons-wrapper d-flex flex-row justify-content-center align-items-center gap-2"
                                    style="margin-top: 15px; border-top: 1px solid #eee; padding-top: 15px;">

                                    <a href="{{ route('kategori.show', $k->kategori_id) }}" class="btn-round btn-view"
                                        title="Detail">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route('kategori.edit', $k->kategori_id) }}" class="btn-round btn-edit"
                                        title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    <form action="{{ route('kategori.destroy', $k->kategori_id) }}" method="POST"
                                        onsubmit="return confirm('Yakin hapus?')" style="display: inline-block; margin: 0;">
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
    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Asset Management</h6>
                        <h2>Daftar Aset</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="{{ route('aset.create') }}">+ Tambah Aset</a>
                    </div>
                </div>

                @forelse($asets as $a)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('aset.show', $a->aset_id) }}">
                                    {{-- Gambar disesuaikan dengan tema game --}}
                                    <img src="{{ asset('assets/images/plc.png') }}" alt="">
                                </a>
                                <span class="price" style="background-color: #ee626b;">{{ $a->kode_aset }}</span>
                            </div>
                            <div class="down-content">
                                {{-- Menampilkan Nama Kategori melalui Relasi --}}
                                <span class="category">{{ $a->kategori->nama }}</span>
                                <h4 title="{{ $a->nama_aset }}">{{ Str::limit($a->nama_aset, 15) }}</h4>

                                <p style="color: #aaa; font-size: 13px; margin-bottom: 15px; min-height: 40px;">
                                    <i class="fa fa-info-circle" style="color: #ee626b;"></i> Kondisi: {{ $a->kondisi }}<br>
                                    <i class="fa fa-calendar" style="color: #ee626b;"></i> {{ $a->tgl_perolehan }}
                                </p>

                                <div class="action-buttons-wrapper d-flex justify-content-center align-items-center gap-2 mt-3 pt-3"
                                    style="border-top: 1px solid #444;">

                                    <a href="{{ route('aset.show', $a->aset_id) }}" class="btn-round btn-detail" title="Detail">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route('aset.edit', $a->aset_id) }}" class="btn-round btn-edit" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="{{ route('aset.destroy', $a->aset_id) }}" method="POST"
                                        onsubmit="return confirm('Yakin hapus aset ini?')" class="m-0 d-inline">
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
                            <i class="fa fa-box-open" style="font-size: 50px; color: #ee626b; margin-bottom: 20px;"></i>
                            <h4 style="color: #fff;">Belum ada data aset</h4>
                            <p style="color: #aaa;">Klik tombol "+ Tambah Aset" untuk memasukkan barang baru.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Tracking System</h6>
                        <h2>Lokasi Aset</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="{{ route('lokasi.create') }}">+ Plot Lokasi Baru</a>
                    </div>
                </div>

                @forelse($lokasis as $l)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('lokasi.show', $l->lokasi_id) }}">
                                    <img src="{{ asset('assets/images/plc.png') }}" alt="">
                                </a>
                                {{-- Menampilkan RT/RW sebagai badge di pojok gambar --}}
                                <span class="price" style="background-color: #ee626b; font-size: 11px;">
                                    RT {{ $l->rt }} / RW {{ $l->rw }}
                                </span>
                            </div>
                            <div class="down-content">
                                {{-- Menampilkan Nama Aset yang menempati lokasi ini --}}
                                <span class="category">{{ $l->aset->nama_aset }}</span>
                                <h4 title="{{ $l->lokasi_text }}">{{ Str::limit($l->lokasi_text, 15) }}</h4>

                                <p style="color: #aaa; font-size: 13px; margin-bottom: 15px; min-height: 40px;">
                                    <i class="fa fa-map-marker" style="color: #ee626b;"></i>
                                    {{ $l->keterangan ?: 'Tidak ada keterangan tambahan.' }}
                                </p>

                                <div class="action-buttons-wrapper d-flex justify-content-center align-items-center gap-2 mt-3 pt-3"
                                    style="border-top: 1px solid #444;">

                                    <a href="{{ route('lokasi.show', $l->lokasi_id) }}" class="btn-round btn-detail"
                                        title="Detail">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route('lokasi.edit', $l->lokasi_id) }}" class="btn-round btn-edit" title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    <form action="{{ route('lokasi.destroy', $l->lokasi_id) }}" method="POST"
                                        onsubmit="return confirm('Hapus data lokasi ini?')" class="m-0 d-inline">
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
                            <i class="fa fa-map-signs" style="font-size: 50px; color: #ee626b; margin-bottom: 20px;"></i>
                            <h4 style="color: #fff;">Belum ada titik lokasi</h4>
                            <p style="color: #aaa;">Klik "+ Plot Lokasi Baru" untuk menentukan posisi aset.</p>
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
                        <h6>Maintenance Records</h6>
                        <h2>Pemeliharaan Aset</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="{{ route('pemeliharaan.create') }}">+ Catat Pemeliharaan</a>
                    </div>
                </div>

                @forelse($pemeliharaans as $p)
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('pemeliharaan.show', $p->pemeliharaan_id) }}">
                                    {{-- Gambar placeholder bertema teknis/tools --}}
                                    <img src="{{ asset('assets/images/plc.png') }}" alt="">
                                </a>
                                {{-- Menampilkan Biaya di pojok gambar --}}
                                <span class="price" style="background-color: #ee626b; font-size: 11px;">
                                    Rp {{ number_format($p->biaya, 0, ',', '.') }}
                                </span>
                            </div>
                            <div class="down-content">
                                {{-- Menampilkan Nama Aset melalui relasi --}}
                                <span class="category">{{ $p->aset->nama_aset }}</span>
                                <h4 title="{{ $p->tindakan }}">{{ Str::limit($p->tindakan, 20) }}</h4>

                                <p style="color: #666; font-size: 13px; min-height: 40px;">
                                    <i class="fa fa-calendar" style="color: #ee626b;"></i>
                                    {{ \Carbon\Carbon::parse($p->tanggal)->format('d/m/Y') }}<br>
                                    <i class="fa fa-user" style="color: #ee626b;"></i> Pelaksana: {{ $p->pelaksana }}
                                </p>

                                <div class="action-buttons-wrapper d-flex flex-row justify-content-center align-items-center gap-2"
                                    style="margin-top: 15px; border-top: 1px solid #eee; padding-top: 15px;">

                                    <a href="{{ route('pemeliharaan.show', $p->pemeliharaan_id) }}" class="btn-round btn-view"
                                        title="Detail">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route('pemeliharaan.edit', $p->pemeliharaan_id) }}" class="btn-round btn-edit"
                                        title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    <form action="{{ route('pemeliharaan.destroy', $p->pemeliharaan_id) }}" method="POST"
                                        onsubmit="return confirm('Hapus log pemeliharaan ini?')"
                                        style="display: inline-block; margin: 0;">
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
                            <i class="fa fa-wrench" style="font-size: 50px; color: #ee626b; margin-bottom: 20px;"></i>
                            <h4 style="color: #fff;">Belum ada catatan pemeliharaan</h4>
                            <p style="color: #aaa;">Klik "+ Catat Pemeliharaan" untuk mendokumentasikan perbaikan aset.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Movement Tracking</h6>
                        <h2>Mutasi Aset</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="{{ route('mutasi.create') }}">+ Catat Mutasi Baru</a>
                    </div>
                </div>

                @forelse($mutasis as $m)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('mutasi.show', $m->mutasi_id) }}">
                                    {{-- Placeholder gambar bertema perpindahan/box --}}
                                    <img src="{{ asset('assets/images/plc.png') }}" alt="">
                                </a>
                                {{-- Menampilkan Tanggal Mutasi sebagai badge di pojok gambar --}}
                                <span class="price" style="background-color: #ee626b; font-size: 11px;">
                                    {{ \Carbon\Carbon::parse($m->tanggal)->format('d/m/Y') }}
                                </span>
                            </div>
                            <div class="down-content">
                                {{-- Menampilkan Nama Aset yang mengalami mutasi --}}
                                <span class="category">{{ $m->aset->nama_aset }}</span>
                                <h4 title="{{ $m->jenis_mutasi }}">{{ Str::limit($m->jenis_mutasi, 15) }}</h4>

                                {{-- Keterangan Mutasi --}}
                                <p style="color: #aaa; font-size: 13px; margin-bottom: 15px; min-height: 40px;">
                                    <i class="fa fa-exchange" style="color: #ee626b;"></i>
                                    {{ $m->keterangan ?: 'Tidak ada catatan mutasi.' }}
                                </p>

                                <div class="action-buttons-wrapper d-flex justify-content-center align-items-center gap-2 mt-3 pt-3"
                                    style="border-top: 1px solid #444;">

                                    <a href="{{ route('mutasi.show', $m->mutasi_id) }}" class="btn-round btn-detail"
                                        title="Detail">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route('mutasi.edit', $m->mutasi_id) }}" class="btn-round btn-edit" title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    <form action="{{ route('mutasi.destroy', $m->mutasi_id) }}" method="POST"
                                        onsubmit="return confirm('Hapus catatan mutasi ini?')" class="m-0 d-inline">
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
                            <i class="fa fa-history" style="font-size: 50px; color: #ee626b; margin-bottom: 20px;"></i>
                            <h4 style="color: #fff;">Belum ada riwayat mutasi</h4>
                            <p style="color: #aaa;">Klik "+ Catat Mutasi Baru" untuk mencatat pergerakan aset.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
    <div class="developer-card" style="background: #ffffff; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: none;">
        <div class="row g-0">
            <div class="col-lg-4" style="background: linear-gradient(180deg, #0d6efd 0%, #0043a8 100%); padding: 50px 30px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                <div class="profile-frame" style="padding: 10px; background: rgba(255,255,255,0.2); border-radius: 40px; backdrop-filter: blur(10px); margin-bottom: 25px;">
                    <img src="{{ asset('assets/images/kaye.jpeg') }}" alt="Rifqi Al Shirazi" 
                         style="width: 200px; height: 260px; object-fit: cover; border-radius: 30px; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
                </div>
                
                <div class="social-links-vertical d-flex flex-row flex-lg-column gap-3">
                    <a href="https://wa.me/08117774714" class="social-icon-modern"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/rifqi-alshirazi-01a1063a1" class="social-icon-modern"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/rifqi24si-cmd" class="social-icon-modern"><i class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com/rifkyysh?igsh=dGluajcyeHlnMzZ6&utm_source=qr" class="social-icon-modern"><i class="fab fa-instagram"></i></a>
                    <a href="https://youtube.com/@rifqialshirazi?si=Y5rV5WkerITbfQ_0" class="social-icon-modern"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-8" style="padding: 60px;">
                <div class="badge mb-3" style="background: rgba(13, 110, 253, 0.1); color: #0d6efd; padding: 8px 16px; border-radius: 50px; font-weight: 600;">PENGEMBANG SISTEM</div>
                
                <h1 style="font-weight: 800; color: #1a1a1a; font-size: 3.5rem; line-height: 1.1; margin-bottom: 10px;">
                    Rifqi Al Shirazi
                </h1>
                <p style="color: #6c757d; font-size: 1.2rem; font-weight: 400; margin-bottom: 40px;">
                    Mahasiswa Sistem Informasi <span style="color: #0d6efd; margin: 0 10px;">|</span> Politeknik Caltex Riau
                </p>

                <div class="info-grid-modern">
                    <div class="info-item-modern">
                        <div class="icon-wrap"><i class="fa fa-id-card"></i></div>
                        <div class="text-wrap">
                            <small>NIM</small>
                            <strong>2457301123</strong>
                        </div>
                    </div>
                    
                    <div class="info-item-modern">
                        <div class="icon-wrap"><i class="fa fa-graduation-cap"></i></div>
                        <div class="text-wrap">
                            <small>Generasi</small>
                            <strong>G24 (2024)</strong>
                        </div>
                    </div>

                    <div class="info-item-modern full-width">
                        <div class="icon-wrap"><i class="fa fa-envelope"></i></div>
                        <div class="text-wrap">
                            <small>Email Institusi</small>
                            <strong>rifqi24si@mahasiswa.pcr.ac.id</strong>
                        </div>
                    </div>
                </div>

                <div class="mt-5 pt-4" style="border-top: 1px solid #f0f0f0;">
                    <p style="color: #888; font-style: italic; font-size: 0.95rem;">
                        "Fokus pada pengembangan solusi digital yang efisien untuk manajemen aset modern."
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection