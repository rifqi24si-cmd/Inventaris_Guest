@extends('layouts.guest.app')

@section('content')
<style>
body {
    background: #f4f6f8;
    font-family: Arial, Helvetica, sans-serif;
}

.contact-container {
    max-width: 1100px;
    margin: 60px auto;
    background: #fff;
    display: flex;
    gap: 30px;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
}

.contact-form,
.contact-map {
    flex: 1;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    font-weight: bold;
    display: block;
    margin-bottom: 6px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

.btn-submit {
    background: #2563eb;
    color: white;
    padding: 12px;
    width: 100%;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}

.btn-submit:hover {
    background: #1e40af;
}

.contact-map iframe {
    width: 100%;
    height: 100%;
    min-height: 420px;
    border-radius: 10px;
    border: 0;
}

.table-container {
    max-width: 1100px;
    margin: 40px auto;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

th {
    background: #2563eb;
    color: white;
}

@media (max-width: 768px) {
    .contact-container {
        flex-direction: column;
    }
}
</style>


<!-- HEADER -->
<div class="page-heading header-text" style="background-color:#2a2a2a; padding:100px 0;">
    <div class="container">
        <h3 style="color:#fff;">Kontak Asset-Track</h3>
        <span class="breadcrumb">
            <a href="/" style="color:#ee626b;">Beranda</a>
            <span style="color:#eee;"> > Kontak Kami</span>
        </span>
    </div>
</div>

<!-- CONTACT SECTION -->
<div class="contact-container">

    <!-- FORM -->
    <div class="contact-form">
        <h3>Hubungi Kami</h3>

        <form action="{{ route('kontak.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="no_hp" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Pesan</label>
                <textarea name="message" required></textarea>
            </div>

            <button class="btn-submit">Kirim Pesan</button>
        </form>
    </div>

    <!-- MAP -->
    <div class="contact-map">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6202055454287!2d101.4235219742405!3d0.5709805635857376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab67086f2e89%3A0x65a24264fec306bb!2sPoliteknik%20Caltex%20Riau!5e0!3m2!1sen!2sid!4v1769620774425!5m2!1sen!2sid"
            loading="lazy">
        </iframe>
    </div>

</div>

{{-- TABLE DATA --}}
@if(isset($kontak) && $kontak->count())
<div class="table-container">
    <h3>📩 Data Pesan Masuk</h3>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kontak as $u)
            <tr>
                <td>{{ $u->name }}</td>
                <td>{{ $u->no_hp }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif

@endsection
