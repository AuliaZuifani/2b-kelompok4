<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Penerbit</h2>
    <div class="text-center mb-4">
        <a href="/publiser/create" class="btn btn-primary btn-sm">Tambah Penerbit Baru</a>
    </div>
    <table class="table table-bordered table-striped" style="max-width: 800px; margin: 0 auto;">
        <thead class="table-dark">
            <tr>
                <th class="text-center">No</th>
                <th>Nama Penerbit</th>
                <th>Alamat</th>
                <th>Kontak</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($publiser)): ?>
                <?php foreach ($publiser as $index => $publiser): ?>
                    <tr>
                        <td class="text-center"><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($publiser['nama_penerbit']) ?></td>
                        <td><?= htmlspecialchars($publiser['alamat']) ?></td>
                        <td><?= htmlspecialchars($publiser['kontak']) ?></td>
                        <td class="text-center">
                            <a href="/publiser/publiser/edit/<?= $publiser['id_penerbit']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="/publiser/delete/<?= $publiser['id_penerbit']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data penerbit.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require_once '../public/footer.php'; ?>