<!-- app/views/loans/create.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>

<div class="container mt-5">
<h2 class="text-center mb-4">Tambah Data Peminjaman</h2>
    <form action="/loans/store" method="POST">
        <table class="table table-bordered" style="max-width: 600px; margin: 0 auto;">
            <tr>
                <td><label for="id_pinjam">ID Pinjam:</label></td>
                <td><input type="number" name="id_pinjam" id="id_pinjam" required><br></td>
            </tr>
            <tr>
                <td><label for="buku_yang_dipinjam">Buku yang Dipinjam:</label></td>
                <td><input type="text" name="buku_yang_dipinjam" id="buku_yang_dipinjam" required><br></td>
            </tr>
            <tr>
                <td><label for="peminjam">Nama Peminjam:</label></td>
                <td><input type="text" name="peminjam" id="peminjam" required><br></td>
            </tr>
            <tr>
                <td><label for="tanggal_pinjam">Tanggal Pinjam:</label></td>
                <td><input type="date" name="tanggal_pinjam" id="tanggal_pinjam" required><br></td>
            </tr>
            <tr>
                <td><label for="tanggal_kembali">Tanggal Kembali:</label></td>
                <td><input type="date" name="tanggal_kembali" id="tanggal_kembali"><br></td>
            </tr>
            <tr>
                <td><label for="id_buku">ID Buku:</label></td>
                <td>
                    <select name="id_buku" id="id_buku" required>
                        <?php foreach ($books as $book): ?>
                            <option value="<?php echo $book['id_buku']; ?>">
                                <?php echo $book['id_buku']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
    </form>
</div>

<?php require_once '../public/footer.php'; ?>
