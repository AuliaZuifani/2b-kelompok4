<!-- app/views/user/index.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengelolaan Perpustakaan Digital</title>

<body>
    <h2>Sistem Pengelolaan Perpustakaan Digital</h2>
    <a href="/users/create" class="btn-user">Tambah Data Users</a>

    <ul>

        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th> Nomor Anggota </th>
                        <th> Nama </th>
                        <th> Email </th>
                        <th> Password </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <p>
                    <tbody>
                        <tr>

                            <?php foreach ($users as $user): ?>
                                <td> <?= htmlspecialchars($user['nomor_anggota']) ?> </td>
                                <td> <?= htmlspecialchars($user['nama']) ?> </td>
                                <td> <?= htmlspecialchars($user['email']) ?> </td>
                                <td> <?= htmlspecialchars($user['password']) ?> </td>
                                <td> <a href="/users/edit/<?php echo $user['id_user']; ?>">Edit</a>
                                    <a href="/users/delete/<?php echo $user['id_user']; ?>" onclick="return confirm('Anda yakin akan menghapus data?')">Delete</a>
                                </td>
                        </tr>
                </p>
                </tbody>
        </div>
    <?php endforeach; ?>

    </table>
    </ul>
</body>

</html>