<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Buku</h2>
    <form action="/books/update/<?php echo $books['id_buku']; ?>" method="POST">
        <table class="table table-bordered" style="max-width: 600px; margin: 0 auto;">
            <tr>
                <td><label for="judul">Judul Buku:</label></td>
                <td><input type="text" id="judul" name="judul" class="form-control form-control-sm" value="<?php echo $books['judul']; ?>" required></td>
            </tr>

            <tr>
                <td><label for="pengarang">Pengarang:</label></td>
                <td><input type="text" id="pengarang" name="pengarang" class="form-control form-control-sm" value="<?php echo $books['pengarang']; ?>" required></td>
            </tr>

            <tr>
                <td><label for="tahun">Tahun:</label></td>
                <td><input type="number" id="tahun" name="tahun" class="form-control form-control-sm" value="<?php echo $books['tahun']; ?>" required></td>
            </tr>

            <tr>
                <td><label for="genre">Genre:</label></td>
                <td><input type="text" id="genre" name="genre" class="form-control form-control-sm" value="<?php echo $books['genre']; ?>" required></td>
            </tr>
        </table>

        <div class="text-center">
            <button type="submit" class="btn btn-warning btn-sm">Update</button>
        </div>
    </form>

    <div class="text-center mt-3">
        <a href="/books/index" class="btn btn-secondary btn-sm">Kembali ke Daftar Buku</a>
    </div>
</div>

<?php require_once '../public/footer.php'; ?>