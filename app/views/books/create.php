<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>
<p></p>
<div class="container mt-5">
    <h2 class="text-center mb-4">Tambah Buku Baru</h2>
    <form action="/books/store" method="POST">
        <table class="table table-bordered" style="max-width: 600px; margin: 0 auto;">
            <!-- Id Buku -->
            <tr>
                <td><label for="id_buku">Id Buku:</label></td>
                <td><input type="text" name="id_buku" id="id_buku" class="form-control form-control-sm" required></td>
            </tr>

            <!-- Judul Buku -->
            <tr>
                <td><label for="judul">Judul Buku:</label></td>
                <td><input type="text" name="judul" id="judul" class="form-control form-control-sm" required></td>
            </tr>

            <!-- Pengarang -->
            <tr>
                <td><label for="pengarang">Pengarang:</label></td>
                <td><input type="text" name="pengarang" id="pengarang" class="form-control form-control-sm" required></td>
            </tr>

            <!-- Tahun -->
            <tr>
                <td><label for="tahun">Tahun:</label></td>
                <td><input type="number" name="tahun" id="tahun" class="form-control form-control-sm" required></td>
            </tr>

            <!-- Genre -->
            <tr>
                <td><label for="genre">Genre:</label></td>
                <td><input type="text" name="genre" id="genre" class="form-control form-control-sm" required></td>
            </tr>

            <!-- Penerbit -->
            <tr>
                <td><label for="id_penerbit">Id Penerbit:</label></td>
                <td>
                    <select name="id_penerbit" id="id_penerbit" class="form-control form-control-sm" required>
                        <?php foreach ($penerbit as $p): ?>
                            <option value="<?php echo $p['id_penerbit']; ?>"><?php echo $p['id_penerbit']; ?> - <?php echo $p['nama_penerbit']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
    </form>
</div>
<div class="text-center mt-3">
    <a href="/books/index" class="btn btn-secondary btn-sm">Kembali ke Daftar Buku</a>
</div>
<?php require_once '../public/footer.php'; ?>