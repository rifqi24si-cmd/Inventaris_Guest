@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Manajemen Pengguna</h3>
                    <span class="breadcrumb">
                        <a href="{{ route('user.index') }}" style="color: #ee626b;">Daftar User</a>
                        <span style="color: #eee;"> > Tambah Baru</span>
                    </span>
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
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <h6 style="color: #ee626b; text-transform: uppercase;">Identity System</h6>
                                    <h2 style="color: #fff;">Daftarkan User Baru</h2>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Nama Lengkap</label>
                                    <input type="text" name="name" placeholder="Nama lengkap user..."
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Alamat Email</label>
                                    <input type="email" name="email" placeholder="email@contoh.com"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Hak Akses (Role)</label>
                                    <select name="role"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                        <option value="user">User (Staf Operasional)</option>
                                        <option value="admin">Admin (Akses Penuh)</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 mb-4">
                                    <label style="color: #ee626b; font-weight: 600;">Password</label>
                                    <input type="password" name="password" placeholder="Minimal 6 karakter"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit"
                                        style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; width: 100%;">SIMPAN
                                        DATA PENGGUNA</button>
                                    <a href="{{ route('user.index') }}" class="btn d-block text-center mt-3"
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