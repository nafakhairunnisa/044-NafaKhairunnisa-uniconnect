<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu UKM - UNIConnect</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @extends('layouts.navbar')

    @section('content')
    <div class="container">
        <h1>Menu UKM</h1>
        <p>Sudah gabung UKM belum? Ayo gabung sekarang dan jadilah bagian dari kegiatan UKM yang seru!</p>
    </div>
    @endsection
</body>
</html>
