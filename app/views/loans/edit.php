<!-- app/views/loans/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Peminjaman Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Peminjaman Buku</h2>
    <form action="/loans/update/<?php echo $loan['id_pinjam']; ?>" method="POST">
        <table class="table table-bordered" style="max-width: 600px; margin: 0 auto;">
            <tr>
                <td><label for="buku_yang_dipinjam">Buku yang Dipinjam:</label></td>
                <td><input type="text" id="buku_yang_dipinjam" name="buku_yang_dipinjam" value="<?php echo htmlspecialchars($loan['buku_yang_dipinjam']); ?>" required class="form-control"></td>
            </tr>
            <tr>
                <td><label for="peminjam">Nama Peminjam:</label></td>
                <td><input type="text" id="peminjam" name="peminjam" value="<?php echo htmlspecialchars($loan['peminjam']); ?>" required class="form-control"></td>
            </tr>
            <tr>
                <td><label for="tanggal_pinjam">Tanggal Pinjam:</label></td>
                <td><input type="date" id="tanggal_pinjam" name="tanggal_pinjam" value="<?php echo htmlspecialchars($loan['tanggal_pinjam']); ?>" required class="form-control"></td>
            </tr>
            <tr>
                <td><label for="tanggal_kembali">Tanggal Kembali:</label></td>
                <td><input type="date" id="tanggal_kembali" name="tanggal_kembali" value="<?php echo htmlspecialchars($loan['tanggal_kembali']); ?>" class="form-control"></td>
            </tr>
           
        </table>

        <!-- Membungkus tombol dengan div untuk menempatkan di tengah -->
        <div class="d-flex flex-column align-items-center mt-4">
            <button type="submit" class="btn btn-warning btn-sm mb-2">Update</button>
            <a href="/loans/index" class="btn btn-secondary btn-sm">Back to List</a>
        </div>
    </form>
</div>

<?php require_once '../public/footer.php'; ?>
</body>
</html>