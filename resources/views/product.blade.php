@extends('template')

@section('title', 'Produk - YPCmart')

@section('hero_title', 'Semua Produk di YPCmart')
@section('hero_subtitle', 'Temukan berbagai produk kreatif karya siswa SMK YPC')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-primary">Daftar Produk</h3>

    <!-- Filter kategori -->
    <div>
        <select class="form-select" style="width: 200px;">
            <option selected>Semua Kategori</option>
            <option value="1">Makanan & Minuman</option>
            <option value="2">Kerajinan</option>
            <option value="3">Aksesoris</option>
            <option value="4">Perlengkapan Sekolah</option>
        </select>
    </div>
</div>

<!-- Daftar Produk -->
<div class="row g-4">
    <!-- Produk 1 -->
    <div class="col-md-3">
        <div class="product-card">
            <img src="{{ asset('images/buku.jpg') }}" alt="Produk 1">
            <h5>Buku Satuan</h5>
            <p>Rp.4000</p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Tas%20Kulit%20Handmade" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>

    <!-- Produk 2 -->
    <div class="col-md-3">
        <div class="product-card">
            <img src="{{ asset('images/serut.jpeg') }}" alt="Produk 2">
            <h5>Serutan</h5>
            <p>Rp.3000</p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Kue%20Kering" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>

    <!-- Produk 3 -->
    <div class="col-md-3">
        <div class="product-card">
            <img src="{{ asset('images/pulpen.jpg') }}" alt="Produk 3">
            <h5>Pulpenp</h5>
            <p>Rp.5000</p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Kerajinan%20Kayu" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>

    <!-- Produk 4 -->
    <div class="col-md-3">
        <div class="product-card">
            <img src="{{ asset('images/penghapus.jpg') }}" alt="Produk 4">
            <h5>Penghapus</h5>
            <p>Rp.3000</p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Sabun%20Organik" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>

    <!-- Produk 5 -->
    <div class="col-md-3">
        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1590080875838-cb63ac60ba6a?auto=format&fit=crop&w=500&q=60" alt="Produk 5">
            <h5>Mug Custom Printing</h5>
            <p>Rp35.000</p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Mug%20Custom" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>

    <!-- Produk 6 -->
    <div class="col-md-3">
        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1503602642458-232111445657?auto=format&fit=crop&w=500&q=60" alt="Produk 6">
            <h5>Tempat Pensil Rajut</h5>
            <p>Rp20.000</p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Tempat%20Pensil" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>
</div>
@endsection
