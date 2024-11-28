<?php
require_once '../public/header.php';
require_once '../public/navbar.php';
?>

<?php if ($_SERVER['REQUEST_URI'] === '/'): ?>
  <div class="container mt-5 d-flex align-items-start" style="min-height: 100vh;">
    <div class="welcome-box p-4 rounded shadow-lg" style="background-color: #f8f9fa; border: 3px solid; border-image: linear-gradient(to right, #ff007f, #000000) 1;">
      <h1 class="text-center" style="font-family: 'Arial', sans-serif; color: #333;">Selamat Datang di Sistem Manajemen Perpustakaan Digital</h1>
      <p class="text-center mt-3" style="font-family: 'Arial', sans-serif; color: #555;">
        Sistem ini dirancang untuk mempermudah pengelolaan data penerbit, buku, pengguna, dan peminjaman di perpustakaan digital Anda.
      </p>
    </div>
  </div>
<?php endif; ?>

<?php
require_once '../public/footer.php';
?>