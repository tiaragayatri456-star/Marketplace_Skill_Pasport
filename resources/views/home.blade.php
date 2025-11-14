@extends('template')

@section('title', 'Beranda - YPCmart')
@section('hero_title', 'Selamat Datang di YPCmart')

@section('content')

<style>
    /* Global spacing */
    .section-title {
        font-weight: 700;
        margin-bottom: 25px;
        margin-top: 40px;
    }

    /* Kartu produk */
    .product-card {
        background: #ffffff;
        border-radius: 15px;
        padding: 15px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        transition: .3s;
        text-align: center;
    }
    .product-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
    .product-card img {
        width: 100%;
        height: 165px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 12px;
    }
    .btn-blue {
        background-color: #006bff;
        color: white;
        border-radius: 12px;
        font-weight: 600;
    }
    .btn-blue:hover {
        background-color: #0050c7;
    }

    /* Category card */
    .category-card {
        background-color: #eef5ff;
        padding: 18px;
        border-radius: 15px;
        text-align: center;
        cursor: pointer;
        transition: .3s;
        font-weight: 600;
    }
    .category-card:hover {
        background-color: #d7e6ff;
        transform: translateY(-4px);
    }

    /* Testimoni */
    .testi-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        transition: .3s;
    }
    .testi-card:hover {
        transform: translateY(-5px);
    }
    .testi-card img {
        border-radius: 50%;
        height: 75px;
        width: 75px;
        object-fit: cover;
    }

    /* Floating WA */
    .floating-wa {
        position: fixed;
        bottom: 25px;
        right: 25px;
        background-color: #25D366;
        color: white;
        width: 65px;
        height: 65px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 32px;
        z-index: 1000;
        box-shadow: 0 4px 12px rgba(0,0,0,0.25);
        text-decoration: none;
    }

    /* FOOTER DIUBAH JADI GELAP BIAR KELIATAN */
    footer {
        background-color: #111827;
        color: #e5e7eb;
        padding: 30px 0;
        margin-top: 60px;
        text-align: center;
    }
</style>

<!-- CAROUSEL -->
<div id="bannerCarousel" class="carousel slide mb-4 shadow-sm" data-bs-ride="carousel">
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <img src="{{ asset('images/banner.jpg') }}" class="d-block w-100" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/ban.jpg') }}" class="d-block w-100" alt="Banner 2">
        </div>
    </div>
</div>

<!-- SEARCH BAR -->
<div class="mb-4">
    <input type="text" class="form-control p-3 shadow-sm" placeholder="Cari produk... Contoh: Pulpen, Buku, Penghapus">
</div>

<!-- KATEGORI -->
<h3 class="section-title">Kategori</h3>
<div class="row g-3 mb-5">
    <div class="col-6 col-md-3"><div class="category-card">ATK</div></div>
    <div class="col-6 col-md-3"><div class="category-card">Seragam</div></div>
    <div class="col-6 col-md-3"><div class="category-card">Snack</div></div>
    <div class="col-6 col-md-3"><div class="category-card">Atribut OSIS</div></div>
</div>

<!-- PRODUK TERBARU -->
<h3 class="section-title text-primary text-center">Produk Terbaru</h3>
<div class="row g-4">

    <!-- produk -->
    <div class="col-md-3">
        <div class="product-card">
            <img src="{{ asset('images/buku.jpg') }}" alt="Buku">
            <h5>Buku Satuan</h5>
            <p class="text-muted">Rp 4.000</p>
            <a href="#" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>

    <div class="col-md-3">
        <div class="product-card">
            <img src="{{ asset('images/serut.jpeg') }}" alt="Serutan">
            <h5>Serutan</h5>
            <p class="text-muted">Rp 2.500</p>
            <a href="#" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>

    <div class="col-md-3">
        <div class="product-card">
            <img src="{{ asset('images/pulpen.jpg') }}" alt="Pulpen">
            <h5>Pulpen</h5>
            <p class="text-muted">Rp 5.000</p>
            <a href="#" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>

    <div class="col-md-3">
        <div class="product-card">
            <img src="{{ asset('images/penghapus.jpg') }}" alt="Penghapus">
            <h5>Penghapus</h5>
            <p class="text-muted">Rp 3.000</p>
            <a href="#" class="btn btn-blue w-100">Pesan via WhatsApp</a>
        </div>
    </div>

</div>

<!-- PRODUK TERLARIS -->
<h3 class="section-title text-success text-center">Produk Terlaris</h3>
<div class="row g-4">
    @php
    $topProducts = [
        ['img'=>'taro.jpeg','name'=>'Snack Populer','price'=>'3000'],
        ['img'=>'pen.jpg','name'=>'Pensil 2B','price'=>'3000'],
        ['img'=>'spidol.png','name'=>'Spidol Boardmarker','price'=>'7000'],
        ['img'=>'mp.jpg','name'=>'Map Plastik','price'=>'2000'],
    ];
    @endphp

    @foreach ($topProducts as $p)
    <div class="col-md-3">
        <div class="product-card">
            <img src="{{ asset('images/'.$p['img']) }}" alt="{{ $p['name'] }}">
            <h5>{{ $p['name'] }}</h5>
            <p class="text-muted">Rp {{ number_format($p['price']) }}</p>
            <a href="#" class="btn btn-blue w-100">Pesan</a>
        </div>
    </div>
    @endforeach
</div>

<!-- TESTIMONI -->
<h3 class="section-title text-warning text-center">Testimoni</h3>

<div class="row g-4">
    <div class="col-md-4">
        <div class="testi-card">
            <img src="{{ asset('images/tiara.jpg') }}" alt="">
            <h6 class="fw-bold mt-2">Tiara - XI RPL</h6>
            <p class="text-warning mb-1">★★★★★</p>
            <p class="text-muted">"Barangnya lengkap dan harga terjangkau"</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="testi-card">
            <img src="{{ asset('images/alw.jpg') }}" alt="">
            <h6 class="fw-bold mt-2">Alwi - X AKL</h6>
            <p class="text-warning mb-1">★★★★★</p>
            <p class="text-muted">"Pelayanan cepat, tinggal pesan lewat WA."</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="testi-card">
            <img src="{{ asset('images/ari.jpg') }}" alt="">
            <h6 class="fw-bold mt-2">Aril - XII TKJ</h6>
            <p class="text-warning mb-1">★★★★☆</p>
            <p class="text-muted">"Koperasinya modern banget sekarang."</p>
        </div>
    </div>
</div>

<!-- FOOTER DARK -->
<footer>
    <p class="fw-bold mb-1">YPCmart • Marketplace Resmi SMK YPC</p>
    <small>Jl. Cikunten Singaparna No. 123 • Telp: 085314676521</small>
</footer>
@endsection
