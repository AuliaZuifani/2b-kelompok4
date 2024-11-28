<!-- app/views/publiser/edit.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>
<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Penerbit</h2>
    <form action="/publiser/update/<?php echo $publiser['id_penerbit']; ?>" method="POST">
    <table class="table table-bordered" style="max-width: 600px; margin: 0 auto;">
            <tr>
                <td><label for="nama_penerbit">Nama Penerbit:</label></td>
                <td><input type="varchar" name="nama_penerbit" id="nama_penerbit" class="form-control form-control-sm" value="<?php echo $publiser['nama_penerbit']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><input type="alamat" name="alamat" id="alamat" class="form-control form-control-sm" value="<?php echo $publiser['alamat']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="kontak">Kontak:</label></td>
                <td><input type="kontak" name="kontak" id="kontak" class="form-control form-control-sm" value="<?php echo $publiser['kontak']; ?>" required></td>
            </tr>
    </table>
    <div class="text-center">
        <button type="submit" class="btn btn-warning btn-sm">Update</button>
    </div>
    <div class="text-center mt-3">
        <a href="/publiser/index" class="btn btn-secondary btn-sm">Kembali ke Daftar Buku</a>
    </div>
    </form>

</div>
<?php require_once '../public/footer.php'; ?>