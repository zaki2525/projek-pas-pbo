<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body class="bg-warning-70">
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">
            <a class="navbar-brand text-dark" href="">
            <img src="{{ asset('images/logo1.png') }}" width="50" height="50" class="me-2">
            <strong>PT MITRASOFT GLOBAL PERDANA</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link activate text-dark fs-5" aria-current="page" href="/Home"><strong>HOME</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link activate text-dark fs-5" aria-current="page" href="/jabatan/index"><strong>JABATAN</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link activate text-dark fs-5" aria-current="page" href="/karyawan/index"><strong>KARYAWAN</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link activate text-dark fs-5" aria-current="page" href="/Gaji/index"><strong>GAJI</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5" href="/Laporan"><strong>LAPORAN</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="div container">
        <div class="row m-4">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

