@extends('layouts.guest.app')

@section('content')
    <div class="page-heading header-text" style="background-color: #2a2a2a; padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #fff;">Edit Pengguna</h3>
                    <span class="breadcrumb" style="color: #eee;">Update akun: {{ $user->name }}</span>
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
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <h6 style="color: #ee626b;">Update Profile</h6>
                                    <h2 style="color: #fff;">Modifikasi Akun</h2>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Nama Lengkap</label>
                                    <input type="text" name="name" value="{{ $user->name }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Email</label>
                                    <input type="email" name="email" value="{{ $user->email }}"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label style="color: #ee626b; font-weight: 600;">Role</label>
                                    <select name="role"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;"
                                        required>
                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 mb-4">
                                    <label style="color: #ee626b; font-weight: 600;">Password (Kosongkan jika tidak ingin
                                        diganti)</label>
                                    <input type="password" name="password"
                                        placeholder="Isi hanya jika ingin merubah password"
                                        style="background-color: #3a3a3a; color: #fff; border: 1px solid #444; border-radius: 20px; padding: 12px 20px; width: 100%;">
                                </div>

                                <div class="col-lg-12 d-flex gap-3">
                                    <button type="submit"
                                        style="background-color: #ee626b; color: #fff; border: none; padding: 15px 30px; border-radius: 25px; font-weight: 600; flex: 2;">PERBARUI
                                        AKUN</button>
                                    <a href="{{ route('user.index') }}"
                                        style="background-color: #444; color: #fff; padding: 15px 30px; border-radius: 25px; text-decoration: none; text-align: center; flex: 1;">KEMBALI</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection