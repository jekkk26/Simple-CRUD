<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://rederp.co.id/wp-content/uploads/2022/07/prosedur-pengambilan-barang-di-gudang.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.7);
            /* Adjusted background color */
            border-radius: 15px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .login-container h2 {
            color: #ffffff;
            /* Text color adjusted to white */
            text-align: center;
            margin-bottom: 30px;
        }

        .login-form label {
            color: #ffffff;
            /* Text color adjusted to white */
            font-weight: bold;
        }

        .login-form input {
            margin-bottom: 20px;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ced4da;
            width: 100%;
            color: #000000;
            /* Text color adjusted to black */
        }

        .login-form button {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            padding: 12px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .login-form button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <h2>Login</h2>
                    <form class="login-form" action="" method="POST">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ old('email') }}" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="mb-3 d-grid">
                            <button name="submit" type="submit" class="btn btn-primary">Login</button>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript dan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-rZlEw3IP9buPuetKw+PHJwEKuC1SNXNUeCE1t1e2IgTtCQ8E64ukFb5QOp+0nFd" crossorigin="anonymous"></script>
    <!-- Tambahkan skrip JavaScript kustom Anda di sini -->
</body>

</html>
