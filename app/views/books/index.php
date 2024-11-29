<?php require_once '../public/header.php'; ?>
<?php require_once '../public/navbar.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Buku</h2>
    <div class="text-center mb-4">
        <a href="/books/create" class="btn btn-primary btn-sm">Tambah Buku</a>
    </div>
    <table class="table table-bordered table-striped" style="max-width: 800px; margin: 0 auto;">
        <thead class="table-dark">
            <tr>
                <th class="text-center">No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun</th>
                <th>Genre</th>
                <th>Penerbit</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($books)): ?>
                <?php foreach ($books as $index => $book): ?>
                    <tr>
                        <td class="text-center"><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($book['judul']) ?></td>
                        <td><?= htmlspecialchars($book['pengarang']) ?></td>
                        <td><?= htmlspecialchars($book['tahun']) ?></td>
                        <td><?= htmlspecialchars($book['genre']) ?></td>
                        <td><?= htmlspecialchars($book['nama_penerbit']) ?></td> <!-- Menampilkan nama penerbit -->
                        <td class="text-center">
                            <a href="/books/edit/<?= $book['id_buku']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="/books/delete/<?= $book['id_buku']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data buku.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require_once '../public/footer.php'; ?>
 