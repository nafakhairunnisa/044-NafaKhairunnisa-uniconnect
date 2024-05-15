<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - UNIConnect</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @extends('layouts.navbar')

    @section('content')
    <div class="container">
        <h1>Berita UKM</h1>
        <p>Kamu bisa menemukan berita tentang berbagai UKM di sini!</p>
    </div>
    @endsection
</body>
</html>
