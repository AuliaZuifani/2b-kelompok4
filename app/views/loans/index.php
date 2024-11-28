<!-- app/views/user/index.php -->
<h2>Daftar Peminjam</h2>
<a href="/loans/create">Tambah Peminjam Baru</a>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; margin-top: 20px;">
    <thead>
        <tr>
            <th>Buku yang Dipinjam</th>
            <th>Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($loans as $loan): ?>
            <tr>
                <td><?= htmlspecialchars($loan['buku_yang_dipinjam']) ?></td>
                <td><?= htmlspecialchars($loan['peminjam']) ?></td>
                <td><?= htmlspecialchars($loan['tanggal_pinjam']) ?></td>
                <td><?= htmlspecialchars($loan['tanggal_kembali']) ?></td>
                <td>
                    <a href="/loans/edit/<?php echo $loan['id_pinjam']; ?>">Edit</a> | 
                    <a href="/loans/delete/<?php echo $loan['id_pinjam']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
