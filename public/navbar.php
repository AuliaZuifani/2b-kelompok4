<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengelolaan Perpustakaan Digital</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar dengan gradasi warna pink dan hitam */
        .navbar {
            background: linear-gradient(to right, #FF66B2, #000000); /* Gradasi dari pink ke hitam */
        }

        .navbar a {
            color: white !important;
        }

        .navbar a:hover {
            color: #f1f1f1 !important;
        }

        .navbar-toggler {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Sistem Pengelolaan Perpustakaan Digital</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/users/index">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/books/index">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/publiser/index">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/loans/index">Loans</a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>