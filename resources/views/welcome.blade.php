<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">App Antrian</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Jadwal</a>
                </div>
            </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-2 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
        <div class="row">
            <div class="col py-3">
                <h2>Daftar Antrian Loading HGP</h2>
                <h5>Tanggal : </h5> 
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col">
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Main Dealer</th>
                            <th>Tujuan</th>
                            <th>Expedisi</th>
                            <th>Planning</th>
                            <th>Slot Time</th>
                            <th>Daftar</th>
                            <th>Loading</th>
                            <th>Selesai</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>NS</td>
                            <td>Semarang</td>
                            <td>Dhamiri</td>
                            <td>31-08-2022</td>
                            <td>31-08-2022 13:00</td>
                            <td>31-08-2022 13:00</td>
                            <td>31-08-2022 13:00</td>
                            <td>31-08-2022 13:00</td>
                            <td>
                                <span class="badge badge-pill bg-success px-3 py-1">Selesai</span>
                            </td>
                            <td>
                                <button class="btn btn-info btn-sm" title="Info"><i class="fa fa-info-circle"></i></button>
                                <button class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
