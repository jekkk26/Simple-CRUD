<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Tambahkan stylesheet kustom atau CSS tambahan Anda di sini -->
    <style>
        body {
            background-image: url('https://www.harmony.co.id/wp-content/uploads/2021/02/Jenis-Gudang-Harmony.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #ffffff;
            /* Warna teks */
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
            /* Atur warna latar belakang navbar */
            border-bottom: 1px solid #ffffff;
            /* Garis bawah pada navbar */
        }

        .navbar-brand {
            font-weight: bold;
            color: #000000;
            /* Warna teks brand */
        }

        .navbar-nav .nav-link {
            color: #000000;
            /* Warna teks link navbar */
        }

        .hero-section {
            background-color: rgba(255, 255, 255, 0.3);
            /* Atur warna latar belakang hero section */
            padding: 80px 0;
            border-bottom: 1px solid #ffffff;
            /* Garis bawah pada hero section */
        }

        .hero-section h1,
        .hero-section p {
            color: #000000;
            /* Warna teks judul dan paragraf hero section */
        }

        .hero-section a.btn {
            background-color: #007bff;
            /* Warna background tombol */
            border-color: #007bff;
            /* Warna border tombol */
        }

        .hero-section a.btn:hover {
            background-color: #0056b3;
            /* Warna background tombol saat dihover */
            border-color: #0056b3;
            /* Warna border tombol saat dihover */
        }

        .featured-products {
            padding: 40px 0;
            border-bottom: 1px solid #ffffff;
            /* Garis bawah pada featured products section */
        }

        .product-card {
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            /* Atur warna latar belakang card produk */
            border: 1px solid #000000;
            /* Atur garis pinggiran card produk */
            border-radius: 10px;
            /* Atur border radius untuk card produk */
        }

        .product-card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .product-card .card-body {
            padding: 20px;
        }

        .product-card h5.card-title {
            color: #007bff;
            /* Warna teks judul produk */
        }

        .product-card p.card-text {
            color: #000000;
            /* Warna teks deskripsi produk */
        }

        .product-card a.btn-primary {
            background-color: #007bff;
            /* Warna background tombol */
            border-color: #007bff;
            /* Warna border tombol */
        }

        .product-card a.btn-primary:hover {
            background-color: #0056b3;
            /* Warna background tombol saat dihover */
            border-color: #0056b3;
            /* Warna border tombol saat dihover */
        }

        .footer {
            background-color: rgba(52, 58, 64, 0.8);
            /* Atur warna latar belakang footer */
            color: #ffffff;
            /* Warna teks footer */
            padding: 20px 0;
        }

        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .hero-section {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 80px 0;
            border-bottom: 1px solid #ffffff;
        }

        .hero-section h1,
        .hero-section p {
            color: #000000;
        }

        .featured-products {
            padding: 40px 0;
            border-bottom: 1px solid #ffffff;
        }

        .product-card {
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #000000;
            border-radius: 10px;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .footer {
            background-color: rgba(52, 58, 64, 0.9);
        }

        .featured-products h2 {
            color: #000000;
        }

        .btn-dark {
            color: #ffffff;
            /* Warna teks tombol */
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
        }
    </style>

</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Barang</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kategori Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center">
        <div class="container">
            <h1 style="color: #000000;">Selamat Datang di Barang Jekkkk</h1>
            <p style="color: #000000;">Temukan berbagai macam barang berkualitas dan Menarik</p>
            <a href="/login" class="btn btn-dark">Lihat Barang</a>
        </div>
    </header>

    <!-- Featured Products Section -->
    <section class="featured-products">
        <div class="container">
            <h2 class="text-center mb-4">Produk Pilihan</h2>
            <div class="row">
                <!-- Tambahkan produk pilihan di sini -->
                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <img src="https://freepngimg.com/thumb/macbook/28521-3-macbook.png" class="card-img-top"
                            alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop</h5>
                            <p class="card-text">Powerful laptop for professional use</p>
                            <a href="/login" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan produk lainnya di sini -->
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2022 Barang Jekkkk. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript dan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-rZlEw3IP9buPuetKw+PHJwEKuC1SNXNUeCE1t1e2IgTtCQ8E64ukFb5QOp+0nFd" crossorigin="anonymous"></script>
    <!-- Tambahkan skrip JavaScript kustom Anda di sini -->
</body>

</html>
