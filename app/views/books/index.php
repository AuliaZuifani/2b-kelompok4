<!-- app/views/books/index.php -->
<h2>Sistem Pengelolaan Perpustakaan Digital</h2>
<a href="/books/create">Tambah Daftar Buku<br></a>
<ul>
    <?php foreach ($books as $book): ?>
        <div>
            <p><?= htmlspecialchars($book['judul']) ?> - <?= htmlspecialchars($book['pengarang']) ?> -
            <?= htmlspecialchars($book['tahun']) ?> - <?= htmlspecialchars($book['genre']) ?> </p>
            
            <a href="/books/edit/<?php echo $book['id_buku']; ?>">Edit</a> |
            <a href="/books/delete/<?php echo $book['id_buku']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </div>
    <?php endforeach; ?>
</ul>