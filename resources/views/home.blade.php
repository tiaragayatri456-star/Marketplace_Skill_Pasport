@extends('template')

@section('title', 'Beranda - YPCmart')

@section('hero_title', 'Selamat Datang di YPCmart')

@section('content')
    <h3 class="mb-4 fw-bold text-center text-primary">Produk Terbaru</h3>

    <div class="row g-4">
        <!-- Produk 1 -->
        <div class="col-md-3">
            <div class="product-card">
                <img src="{{ asset('images/buku.jpg') }}" alt="Produk 1">
                <h5>Buku Satuan</h5>
                <p>4000</p>
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Tas%20Kulit%20Handmade" class="btn btn-blue w-100">Pesan via WhatsApp</a>
            </div>
        </div>

        <!-- Produk 2 -->
        <div class="col-md-3">
            <div class="product-card">
                <img src="{{ asset('images/serut.jpeg') }}" alt="Produk 2">
                <h5>Serutan</h5>
                <p>2500</p>
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Kue%20Kering" class="btn btn-blue w-100">Pesan via WhatsApp</a>
            </div>
        </div>

        <!-- Produk 3 -->
        <div class="col-md-3">
            <div class="product-card">
                <img src="{{ asset('images/pulpen.jpg') }}" alt="Produk 3">
                <h5>Pulpen </h5>
                <p>5000</p>
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Kerajinan%20Kayu" class="btn btn-blue w-100">Pesan via WhatsApp</a>
            </div>
        </div>

        <!-- Produk 4 -->
        <div class="col-md-3">
            <div class="product-card">
                <img src="{{ asset('images/penghapus.jpg') }}" alt="Produk 4">
                <h5>Pengapus</h5>
                <p>30000</p>
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20Sabun%20Organik" class="btn btn-blue w-100">Pesan via WhatsApp</a>
            </div>
        </div>
    </div>
@endsection
