<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #f4f6f9;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #ffffff;
            border-right: 1px solid #ddd;
            padding: 20px 10px;
            position: fixed;
            left: 0;
            top: 0;
        }

        .sidebar a {
            display: block;
            padding: 12px 15px;
            font-weight: 500;
            border-radius: 8px;
            color: #333;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #e8e4ff;
            color: #5a3ec8;
        }

        /* MAIN WRAPPER */
        .main-content {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        .topbar {
            background: #fff;
            padding: 15px 25px;
            border-bottom: 1px solid #ddd;
            font-size: 18px;
            font-weight: 600;
        }

        /* CARDS */
        .dashboard-card {
            padding: 25px;
            border-radius: 12px;
            color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            transition: .2s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
        }

        .bg-user { background: #6f42c1; }
        .bg-produk { background: #0d6efd; }
        .bg-gambar_produk { background: #f894e7}
        .bg-kategori { background: #20c997; }
    </style>
</head>

<body>

<div class="sidebar" >
    <a href="/admin/user">User</a>
    <a href="/admin/toko">Toko</a>
    <a href="/admin/kategori">Kategori</a>
    <a href="/admin/produk">Produk</a>
    <a href="/admin/gambar-produk">Gambar Produk</a>
    <a href="/logout" class="text-danger">Logout</a>
</div>
        <!-- HALAMAN LAIN -->
        @yield('content')

    </div>
</div>

</body>
</html>
