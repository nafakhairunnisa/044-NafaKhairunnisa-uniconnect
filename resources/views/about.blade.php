<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - UNIConnect</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @extends('layouts.navbar')

    @section('content')
    <div class="container">
        <h1>Tentang</h1>
        <p><b>UNIConnect</b> adalah platform untuk menghubungkan dan memberdayakan mahasiswa melalui Unit Kegiatan Mahasiswa (UKM) di universitas. Dengan UNIConnect, mahasiswa dapat dengan mudah mengakses informasi terkini tentang berbagai UKM, termasuk detail kegiatan, acara, dan pencapaian.
            <br> <br>
        <b>UNIConnect</b> hadir untuk mendukung dan memfasilitasi partisipasi aktif mahasiswa dalam berbagai kegiatan kampus, memperkaya pengalaman mereka, dan membangun komunitas yang lebih terhubung dan dinamis.</p>
    </div>
    @endsection
</body>
</html>
