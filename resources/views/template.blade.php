<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Marketplace SMK YPC')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --blue-100: #f0f8ff;
            --blue-300: #b3e5fc;
            --blue-400: #4fc3f7;
            --blue-500: #039be5;
            --text-dark: #2b2b2b;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--blue-100);
            color: var(--text-dark);
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, var(--blue-400), var(--blue-500));
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: 700;
            color: #fff !important;
        }
        .nav-link {
            color: #fff !important;
            font-weight: 500;
            transition: 0.3s;
        }
        .nav-link:hover {
            text-decoration: underline;
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, #e1f5fe, #b3e5fc);
            text-align: center;
            padding: 60px 20px;
            border-radius: 0 0 40px 40px;
            margin-bottom: 40px;
        }
        .hero h1 {
            font-weight: 700;
            color: var(--blue-500);
        }
        .hero p {
            color: #555;
        }

        /* Product Card */
        .product-card {
            background: #fff;
            border: none;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0,0,0,0.05);
            transition: 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(3,155,229,0.15);
        }
        .product-card img {
            border-radius: 10px;
            margin-bottom: 10px;
            height: 150px;
            object-fit: cover;
            width: 100%;
        }
        .btn-blue {
            background-color: var(--blue-500);
            border: none;
            color: #fff;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-blue:hover {
            background-color: var(--blue-400);
        }

        /* Footer */
        footer {
            background: var(--blue-400);
            color: #fff;
            text-align: center;
            padding: 20px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            margin-top: 60px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">YPCmart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="{{ url('/produk') }}" class="nav-link">Produk</a></li>
                    <li class="nav-item"><a href="{{ url('/detail-produk') }}" class="nav-link">Detail Produk</a></li>
                    <li class="nav-item"><a href="{{ url('/toko') }}" class="nav-link">Toko</a></li>
                    <li class="nav-item"><a href="{{ url('/transaksi') }}" class="nav-link">Transaksi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="hero">
        <h1>@yield('hero_title', 'Selamat Datang di YPCmart')</h1>
        <p>@yield('hero_subtitle', 'Marketplace resmi SMK YPC — dukung karya siswa')</p>
    </div>

    <!-- Konten Halaman -->
    <div class="container mb-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>© {{ date('Y') }} YPCmart | Marketplace SMK YPC</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
