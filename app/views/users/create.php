<!-- app/views/user/create.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>

<div class="container mt-5">

    <h2 class="text-center mb-4">Tambah User</h2>
    <form action="/users/store" method="POST">
        <table class="table table-bordered" style="max-width: 600px; margin: 0 auto;">

            <tr>
                
               <td> <label for="nomor_anggota">Nomor Anggota:</label></td>
                <td><input type="text" name="nomor_anggota" id="nomor_anggota" class="form-control form-control-sm" required><br></td>
            </tr>

            <tr>
                <td><label for="nama">Nama:</label></td>
               <td><input type="text" name="nama" id="nama" class="form-control form-control-sm" required><br></td>
            </tr>

            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" id="email" class="form-control form-control-sm" required><br></td>
            </tr>

            <tr>
                <td><label for="password">Password:</label></td>
               <td> <input type="password" name="password" id="password" class="form-control form-control-sm" required><br></td>
            </tr>
        </table>
        <div class = "text-center">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>  
        </div>
    </form>  
</div>
    <?php require_once '../public/footer.php'; ?>
    