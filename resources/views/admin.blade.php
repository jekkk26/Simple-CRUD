<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://www.mas-software.com/wp-content/uploads/2022/10/Apa-Itu-Warehouse.jpg.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .bg-white {
            background-color: rgba(255, 255, 255, 0.8);
        }

        .container-sm {
            max-width: 600px;
        }

        .border {
            border: 1px solid #000000;
        }

        .rounded {
            border-radius: 10px;
        }

        .px-5 {
            padding-left: 5px;
            padding-right: 5px;
        }

        .py-3 {
            padding-top: 3px;
            padding-bottom: 3px;
        }

        .pb-5 {
            padding-bottom: 5px;
        }

        .alert-success {
            background-color: #28a745;
            color: #ffffff;
            border-color: #218838;
        }

        .mt-3 {
            margin-top: 3px;
        }

        .btn-dark {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-dark:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .list-group-item {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #000000;
            margin-bottom: 3px;
        }

        .list-group-item a {
            color: #ffffff;
        }

        .list-group-item a:hover {
            text-decoration: none;
        }

        .text-light {
            /* Add a text shadow for better visibility */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        /* Add this style to change the text color to black */
        .text-black {
            color: #000000;
        }
    </style>
</head>

<body class="bg-secondary">
    
    <div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-light text-black">Halo!!</h1>
        <div class="text-light text-black">Selamat Datang Di Halaman Admin</div>
        <div class="card mt-3">
            <ul class="list-group list-group-flush">
                @if (Auth::user()->role == 'admin')
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            Menu Data Barang
                            <a href="/admin/barang" class="btn btn-sm btn-success">Pilih >></a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            Menu Jenis Barang
                            <a href="/barang/jenis" class="btn btn-sm btn-success">Pilih >></a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            Menu Jenis Dan Data Barang
                            <a href="/barang/barangdanjenis" class="btn btn-sm btn-success">Pilih >></a>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <a href="/logout" class="btn btn-sm btn-danger"><< Logout </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
