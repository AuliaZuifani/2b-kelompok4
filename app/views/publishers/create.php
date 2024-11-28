<!-- app/views/user/create.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>
<div class="container mt-5">
<h2 class="text-center mb-4">Tambah Penerbit Baru</h2>
<form action="/publiser/store" method="POST">
<table class="table table-bordered" style="max-width: 600px; margin: 0 auto;">
            <tr>
                <td><label for="id_penerbit">id penerbit:</label></td><br>
                <td><input type="varchar" name="id_penerbit" id="id_penerbit" class="form-control form-control-sm" required></td>
            </tr>
            <tr>
                <td><label for="nama_penerbit">Nama Penerbit:</label><br></td>
                <td><input type="text" name="nama_penerbit" id="nama_penerbit" class="form-control form-control-sm" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label><br></td>
                <td><input type="varchar" name="alamat" id="alamat" class="form-control form-control-sm" required></td>
            </tr>
            <tr>
                <td><label for="kontak">Kontak:</label><br></td>
                <td><input type="varchar" name="kontak" id="kontak" class="form-control form-control-sm" required></td>
            </tr>
        </table>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
    </form>
</div>
<?php require_once '../public/footer.php'; ?>
