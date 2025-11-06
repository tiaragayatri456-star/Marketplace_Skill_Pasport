@extends('template')

@section('title', 'Detail Produk - YPCmart')

@section('hero_title', 'Detail Produk')
@section('hero_subtitle', 'Lihat informasi lengkap produk pilihanmu')

@section('content')
<div class="row align-items-center">
    <!-- Gambar Produk -->
    <div class="col-md-5">
        <img src="https://images.unsplash.com/photo-1580910051074-3eb694886505?auto=format&fit=crop&w=800&q=80" 
             alt="Tas Kulit Handmade" class="img-fluid rounded shadow-sm">
    </div>

    <!-- Detail Produk -->
    <div class="col-md-7">
        <h2 class="fw-bold text-primary mb-3">Tas Kulit Handmade</h2>
        <h4 class="text-success mb-4">Rp120.000</h4>
        <p class="mb-4" style="line-height: 1.8;">
            Tas kulit buatan tangan karya siswa jurusan Tata Busana SMK YPC. 
            Terbuat dari bahan kulit sintetis berkualitas tinggi dengan jahitan rapi. 
            Cocok untuk kegiatan sekolah, kuliah, maupun kerja. 
            Tersedia dalam beberapa warna: cokelat muda, hitam, dan krem.
        </p>

        <div class="d-flex gap-2">
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Tas%20Kulit%20Handmade" 
               class="btn btn-blue px-4">Pesan via WhatsApp</a>
            <a href="{{ url('/produk') }}" class="btn btn-outline-secondary px-4">Kembali ke Produk</a>
        </div>
    </div>
</div>

<!-- Produk Serupa -->
<hr class="my-5">
<h4 class="fw-bold text-primary mb-4">Produk Serupa</h4>
<div class="row g-4">
    <div class="col-md-3">
        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1606813902791-559d3a0b91c9?auto=format&fit=crop&w=500&q=60" alt="Produk 2">
            <h5>Kerajinan Kayu Miniatur</h5>
            <p>Rp80.000</p>
            <a href="{{ url('/detail-produk') }}" class="btn btn-blue w-100">Lihat Detail</a>
        </div>
    </div>

    <div class="col-md-3">
        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1616627985123-573b97a7d508?auto=format&fit=crop&w=500&q=60" alt="Produk 3">
            <h5>Sabun Organik Alami</h5>
            <p>Rp25.000</p>
            <a href="{{ url('/detail-product') }}" class="btn btn-blue w-100">Lihat Detail</a>
        </div>
    </div>
</div>
@endsection
