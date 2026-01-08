@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Profil Pengguna</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('user.index') }}" style="color: #ee626b;">Manajemen User</a>
                        <span style="color: #eee;"> > </span>
                        <span style="color: #eee;">Detail Akun</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product section" style="background-color: #1f1f1f; padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="left-image"
                        style="background-color: #2a2a2a; padding: 60px; border-radius: 25px; border: 1px solid #333; text-align: center;">
                        <i class="fa fa-user-circle"
                            style="font-size: 160px; color: {{ $user->role == 'admin' ? '#ee626b' : '#aaa' }}; margin-bottom: 25px;"></i>
                        <h4 style="color: #fff; text-transform: uppercase; letter-spacing: 1px;">{{ $user->name }}</h4>
                        <span
                            style="background-color: {{ $user->role == 'admin' ? '#ee626b' : '#444' }}; color: #fff; padding: 5px 20px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                            {{ strtoupper($user->role) }}
                        </span>
                    </div>
                </div>

                <div class="col-lg-7 align-self-center">
                    <div class="right-content"
                        style="background-color: #2a2a2a; padding: 40px; border-radius: 25px; border: 1px solid #333;">
                        <h6 style="color: #ee626b; text-transform: uppercase; margin-bottom: 10px;">Identity Details</h6>
                        <h2 style="color: #fff; font-size: 30px; margin-bottom: 25px;">Informasi Akun</h2>

                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 18px; border-bottom: 1px solid #444; padding-bottom: 12px;">
                                <span style="color: #ee626b; font-weight: 600; width: 160px; display: inline-block;">
                                    <i class="fa fa-envelope" style="margin-right: 10px;"></i> Email
                                </span>
                                <span style="color: #fff;">{{ $user->email }}</span>
                            </li>

                            <li style="margin-bottom: 18px; border-bottom: 1px solid #444; padding-bottom: 12px;">
                                <span style="color: #ee626b; font-weight: 600; width: 160px; display: inline-block;">
                                    <i class="fa fa-shield" style="margin-right: 10px;"></i> Hak Akses
                                </span>
                                <span
                                    style="color: #fff;">{{ $user->role == 'admin' ? 'Administrator (Full Access)' : 'Staff Operasional (Limited Access)' }}</span>
                            </li>

                            <li style="margin-bottom: 18px; border-bottom: 1px solid #444; padding-bottom: 12px;">
                                <span style="color: #ee626b; font-weight: 600; width: 160px; display: inline-block;">
                                    <i class="fa fa-calendar-check-o" style="margin-right: 10px;"></i> Terdaftar Sejak
                                </span>
                                <span style="color: #fff;">{{ $user->created_at->format('d F Y (H:i)') }}</span>
                            </li>

                            <li style="margin-bottom: 18px; border-bottom: 1px solid #444; padding-bottom: 12px;">
                                <span style="color: #ee626b; font-weight: 600; width: 160px; display: inline-block;">
                                    <i class="fa fa-refresh" style="margin-right: 10px;"></i> Update Terakhir
                                </span>
                                <span style="color: #aaa; font-size: 14px;">{{ $user->updated_at->diffForHumans() }}</span>
                            </li>
                        </ul>

                        <div class="d-flex gap-3 mt-5">
                            <a href="{{ route('user.edit', $user->id) }}"
                                style="background-color: #f39c12; color: #fff; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; flex: 1; text-align: center;">
                                <i class="fa fa-pencil"></i> Edit Akun
                            </a>

                            {{-- Jangan izinkan user menghapus dirinya sendiri di halaman detail --}}
                            @if(Auth::id() !== $user->id)
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus user ini secara permanen?')" style="flex: 1;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        style="background-color: #ee626b; color: #fff; padding: 12px 25px; border-radius: 25px; font-weight: 600; width: 100%; border: none;">
                                        <i class="fa fa-trash"></i> Hapus User
                                    </button>
                                </form>
                            @endif
                        </div>

                        <a href="{{ route('user.index') }}" class="d-block text-center mt-4"
                            style="color: #aaa; text-decoration: none; font-size: 14px;">
                            <i class="fa fa-arrow-left"></i> Kembali ke Manajemen User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Profil Pengguna</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('user.index') }}" style="color: #ee626b;">Manajemen User</a>
                        <span style="color: #eee;"> > </span>
                        <span style="color: #eee;">Detail Akun</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product section" style="background-color: #1f1f1f; padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="left-image"
                        style="background-color: #2a2a2a; padding: 60px; border-radius: 25px; border: 1px solid #333; text-align: center;">
                        <i class="fa fa-user-circle"
                            style="font-size: 160px; color: {{ $user->role == 'admin' ? '#ee626b' : '#aaa' }}; margin-bottom: 25px;"></i>
                        <h4 style="color: #fff; text-transform: uppercase; letter-spacing: 1px;">{{ $user->name }}</h4>
                        <span
                            style="background-color: {{ $user->role == 'admin' ? '#ee626b' : '#444' }}; color: #fff; padding: 5px 20px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                            {{ strtoupper($user->role) }}
                        </span>
                    </div>
                </div>

                <div class="col-lg-7 align-self-center">
                    <div class="right-content"
                        style="background-color: #2a2a2a; padding: 40px; border-radius: 25px; border: 1px solid #333;">
                        <h6 style="color: #ee626b; text-transform: uppercase; margin-bottom: 10px;">Identity Details</h6>
                        <h2 style="color: #fff; font-size: 30px; margin-bottom: 25px;">Informasi Akun</h2>

                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 18px; border-bottom: 1px solid #444; padding-bottom: 12px;">
                                <span style="color: #ee626b; font-weight: 600; width: 160px; display: inline-block;">
                                    <i class="fa fa-envelope" style="margin-right: 10px;"></i> Email
                                </span>
                                <span style="color: #fff;">{{ $user->email }}</span>
                            </li>

                            <li style="margin-bottom: 18px; border-bottom: 1px solid #444; padding-bottom: 12px;">
                                <span style="color: #ee626b; font-weight: 600; width: 160px; display: inline-block;">
                                    <i class="fa fa-shield" style="margin-right: 10px;"></i> Hak Akses
                                </span>
                                <span
                                    style="color: #fff;">{{ $user->role == 'admin' ? 'Administrator (Full Access)' : 'Staff Operasional (Limited Access)' }}</span>
                            </li>

                            <li style="margin-bottom: 18px; border-bottom: 1px solid #444; padding-bottom: 12px;">
                                <span style="color: #ee626b; font-weight: 600; width: 160px; display: inline-block;">
                                    <i class="fa fa-calendar-check-o" style="margin-right: 10px;"></i> Terdaftar Sejak
                                </span>
                                <span style="color: #fff;">{{ $user->created_at->format('d F Y (H:i)') }}</span>
                            </li>

                            <li style="margin-bottom: 18px; border-bottom: 1px solid #444; padding-bottom: 12px;">
                                <span style="color: #ee626b; font-weight: 600; width: 160px; display: inline-block;">
                                    <i class="fa fa-refresh" style="margin-right: 10px;"></i> Update Terakhir
                                </span>
                                <span style="color: #aaa; font-size: 14px;">{{ $user->updated_at->diffForHumans() }}</span>
                            </li>
                        </ul>

                        <div class="d-flex gap-3 mt-5">
                            <a href="{{ route('user.edit', $user->id) }}"
                                style="background-color: #f39c12; color: #fff; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; flex: 1; text-align: center;">
                                <i class="fa fa-pencil"></i> Edit Akun
                            </a>

                            {{-- Jangan izinkan user menghapus dirinya sendiri di halaman detail --}}
                            @if(Auth::id() !== $user->id)
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus user ini secara permanen?')" style="flex: 1;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        style="background-color: #ee626b; color: #fff; padding: 12px 25px; border-radius: 25px; font-weight: 600; width: 100%; border: none;">
                                        <i class="fa fa-trash"></i> Hapus User
                                    </button>
                                </form>
                            @endif
                        </div>

                        <a href="{{ route('user.index') }}" class="d-block text-center mt-4"
                            style="color: #aaa; text-decoration: none; font-size: 14px;">
                            <i class="fa fa-arrow-left"></i> Kembali ke Manajemen User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection