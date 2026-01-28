@extends('layouts.app') {{-- Gunakan template yang sudah kamu punya --}}

@section('content')
<div class="container">
    <h1>Hasil Pengecekan SIC</h1>
    
    {{-- Memanggil Partial View --}}
    @include('partials._pesan')
</div>
@endsection