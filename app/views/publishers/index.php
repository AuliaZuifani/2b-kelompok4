<!-- app/views/user/index.php -->
<h2>Daftar Penerbit</h2>
<a href="/publiser/create">Tambah Penerbit Baru</a><br><br>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Penerbit</th>
            <th>Alamat</th>
            <th>Kontak</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($publiser)): ?>
            <?php foreach ($publiser as $index => $publiser): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($publiser['nama_penerbit']) ?></td>
                    <td><?= htmlspecialchars($publiser['alamat']) ?></td>
                    <td><?= htmlspecialchars($publiser['kontak']) ?></td>
                    <td>
                        <a href="/publiser/publiser/edit/<?= $publiser['id_penerbit']; ?>">Edit</a> |
                        <a href="/publiser/delete/<?= $publiser['id_penerbit']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" style="text-align: center;">Tidak ada data penerbit.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
