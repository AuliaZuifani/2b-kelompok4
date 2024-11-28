<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Peminjam Buku baru</h2>
    <div class="text-center mb-4">
        <a href="/loans/create" class="btn btn-primary btn-sm">Tambah Peminjam Baru</a>
    </div>
    <table class="table table-bordered table-striped" style="max-width: 800px; margin: 0 auto;">
        <thead class="table-dark">
            <tr>
                <th class="text-center">No</th>
                <th>Buku yang Dipinjam</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($loans)): ?>
                <?php foreach ($loans as $index => $loan): ?>
                    <tr>
                        <td class="text-center"><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($loan['buku_yang_dipinjam']) ?></td>
                        <td><?= htmlspecialchars($loan['peminjam']) ?></td>
                        <td><?= htmlspecialchars($loan['tanggal_pinjam']) ?></td>
                        <td><?= htmlspecialchars($loan['tanggal_kembali']) ?></td>
                        <td class="text-center">
                            <a href="/loans/edit/<?= $loan['id_pinjam']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="/loans/delete/<?= $loan['id_pinjam']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin inging menghapus data?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data peminjam.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require_once '../public/footer.php'; ?>
