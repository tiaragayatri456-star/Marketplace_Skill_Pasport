@extends('template')

@section('title', 'Toko - YPCmart')

@section('hero_title', 'Daftar Toko di YPCmart')
@section('hero_subtitle', 'Temukan toko-toko kreatif dari siswa SMK YPC')

@section('content')
<div class="container">

    <!-- Toko 1 -->
    <div class="row align-items-center mb-5">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/logo_toko1.png') }}" alt="Logo Toko 1" class="rounded-circle shadow-sm" width="150">
        </div>
        <div class="col-md-8">
            <h2 class="fw-bold text-primary">YPCmart</h2>
            <p class="text-muted">Marketplace karya siswa SMK YPC yang menyediakan berbagai produk kreatif mulai dari kerajinan tangan hingga perlengkapan sekolah.</p>
            <p><strong>Kontak WhatsApp:</strong> 
                <a href="https://wa.me/6281234567890" class="text-success fw-bold" target="_blank">+62 812-3456-7890</a>
            </p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20produk%20di%20YPCmart%201" class="btn btn-blue">Hubungi via WhatsApp</a>
        </div>
    </div>

    <hr>

    <!-- Toko 2 -->
    <div class="row align-items-center mb-5">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/logo_toko2.png') }}" alt="Logo Toko 2" class="rounded-circle shadow-sm" width="150">
        </div>
        <div class="col-md-8">
            <h2 class="fw-bold text-primary">Reka karya</h2>
            <p class="text-muted">Toko ini fokus pada makanan dan minuman buatan siswa, termasuk kue kering dan minuman sehat.</p>
            <p><strong>Kontak WhatsApp:</strong> 
                <a href="https://wa.me/6289876543210" class="text-success fw-bold" target="_blank">+62 898-7654-3210</a>
            </p>
            <a href="https://wa.me/6289876543210?text=Halo,%20saya%20tertarik%20dengan%20produk%20di%20YPCmart%202" class="btn btn-blue">Hubungi via WhatsApp</a>
        </div>
    </div>

    <hr>

    <!-- Toko 3 -->
    <div class="row align-items-center mb-5">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/logo_toko3.png') }}" alt="Logo Toko 3" class="rounded-circle shadow-sm" width="150">
        </div>
        <div class="col-md-8">
            <h2 class="fw-bold text-primary">Craft</h2>
            <p class="text-muted">Toko ini menjual kerajinan tangan unik dan aksesoris kreatif hasil karya siswa SMK YPC.</p>
            <p><strong>Kontak WhatsApp:</strong> 
                <a href="https://wa.me/6281122334455" class="text-success fw-bold" target="_blank">+62 811-2233-4455</a>
            </p>
            <a href="https://wa.me/6281122334455?text=Halo,%20saya%20tertarik%20dengan%20produk%20di%20YPCmart%203" class="btn btn-blue">Hubungi via WhatsApp</a>
        </div>
    </div>
</div>
@endsection
