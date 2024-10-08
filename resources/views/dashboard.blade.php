<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
        }
        .dashboard-container {
            margin-top: 50px; /* Jarak atas untuk kontainer */
        }
    </style>
</head>
<body>
    <div class="container dashboard-container text-center">
        <h1 class="display-2">Selamat datang di Dashboard, {{ Auth::user()->name }}😊😊!</h1>
        <p class="lead">Kamu berhasil login</p>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>