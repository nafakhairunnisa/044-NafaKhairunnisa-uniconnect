<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIConnect</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/menu-ukm') }}">Menu UKM</a></li>
                <li><a href="{{ url('/news') }}">Berita</a></li>
                <li><a href="{{ url('/ukm/event') }}">Acara</a></li>
                <li><a href="{{ url('/about') }}">Tentang</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>
