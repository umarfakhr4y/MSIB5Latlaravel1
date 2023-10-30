<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal Website</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Selamat Datang di Website Saya</h1>
        <p>Di sini Anda dapat menemukan informasi tentang diri saya dan kampus saya.</p>
        <p>Silakan kunjungi halaman Data Diri dan Data Kampus untuk informasi lebih lanjut.</p>

        <a class="btn btn-primary" href="{{ route('data-diri') }}">Data Diri</a>
        <a class="btn btn-info" href="{{ route('data-kampus') }}">Data Kampus</a>
    </div>

    <!-- Tambahkan link JavaScript Bootstrap (opsional, jika Anda memerlukannya) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
