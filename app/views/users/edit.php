<!-- app/views/user/edit.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>

<div class="container mt-5">

    <h2 class="text-center mb-4">Edit User</h2>
    <form action="/users/update/<?php echo $user['id_user']; ?>" method="POST">
        <table class="table table-bordered" style="max-width: 600px; margin: 0 auto;">

            <tr>
                <td><label for="nomor_anggota">Nomor Anggota:</label></td>
                <td><input type="text" name="nomor_anggota" class="form-control form-control-sm" value="<?php echo $user['nomor_anggota'] ?>" required></td>
            </tr>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="nama" name="nama" class="form-control form-control-sm" value="<?php echo $user['nama']; ?>" required></td>
            </tr>

            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" class="form-control form-control-sm" value="<?php echo $user['email']; ?>" required></td>
            </tr>

            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" class="form-control form-control-sm" value="<?php echo $user['password']; ?>" required></td>
            </tr>
        </table>
        <div class="text-center">
            <button type="submit" class="btn btn-warning btn-sm">Simpan</button>
        </div>

        <div class="text-center mt-3">
            <a href="/books/index" class="btn btn-secondary btn-sm">Kembali ke Daftar Buku</a>
        </div>
    </form>
</div>
<?php require_once '../public/footer.php'; ?>