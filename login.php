<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap Stylesheet von CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Dein eigenes Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="container">
        <h1 class="text-center mb-4">Login</h1>

        <!-- Login-Formular -->
        <form action="login.php" method="POST" class="w-100">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Passwort</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional, falls du interaktive Elemente wie Dropdowns, Modals etc. brauchst) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>