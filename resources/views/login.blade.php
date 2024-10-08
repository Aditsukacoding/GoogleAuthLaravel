<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container vh-100 d-flex flex-column justify-content-center">
        <h1 class="text-center mb-4">Login</h1>

        <!-- Tombol Login Google -->
        <div class="d-flex justify-content-center">
            <a href="{{ url('auth/google') }}" class="btn btn-primary">
                <img src="https://img.icons8.com/color/16/000000/google-logo.png" alt="Google Logo"/>
                Login with Google
            </a>
        </div>
    </div>
</body>
</html>