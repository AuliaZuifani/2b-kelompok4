<!-- app/views/user/index.php -->
<?php require_once '../public/header.php' ?>
<?php require_once '../public/navbar.php' ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar User</h2>
    <div class="text-center mb-4">
        <a href="/users/create" class="btn btn-primary btn-sm">Tambah User Baru</a>
    </div>
    <table class="table table-bordered table-striped" style="max-width: 800px; margin: 0 auto;">
        <thead class="table-dark">
            <tr>
                <th> Nomor Anggota </th>
                <th> Nama </th>
                <th> Email </th>
                <th> Password </th>
                <th class="text-center"> Aksi </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php if (!empty($user)); ?>
                <?php foreach ($users as $index => $user): ?>
                    <td> <?= htmlspecialchars($user['nomor_anggota']) ?> </td>
                    <td> <?= htmlspecialchars($user['nama']) ?> </td>
                    <td> <?= htmlspecialchars($user['email']) ?> </td>
                    <td> <?= htmlspecialchars($user['password']) ?> </td>
                    <td class="text-center">
                        <a href="/users/edit/<?php echo $user['id_user']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/users/delete/<?php echo $user['id_user']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus data?')">Delete</a>
                    </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
<?php require_once '../public/footer.php' ?>