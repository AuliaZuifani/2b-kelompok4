<?php
// app/controllers/LoansController.php
require_once '../app/models/loans.php';

class LoanController {
    private $LoanModel;

    public function __construct() {
        $this->LoanModel = new Loan();
    }

    public function index() {
        $loans = $this->LoanModel->getAllLoans();
        require_once '../app/views/loans/index.php';
    }

    public function create() {
        $books = $this->LoanModel->getAllBooks();
        require_once '../app/views/loans/create.php';
    }
 
    public function store() {
        $id_pinjam = $_POST['id_pinjam'];
        $id_buku = $_POST['id_buku'];
        $buku = $_POST['buku_yang_dipinjam'];
        $peminjam = $_POST['peminjam'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_kembali = $_POST['tanggal_kembali'];

        // Panggil model untuk menambahkan data
        $this->LoanModel->add($id_pinjam, $id_buku, $buku, $peminjam, $tanggal_pinjam, $tanggal_kembali);

        // Redirect setelah data berhasil disimpan
        header('Location: /loans/index');
    }

    public function edit($id_pinjam) {
        $loan = $this->LoanModel->find($id_pinjam);
        require_once '../app/views/loans/edit.php';
    }

    public function update($id_pinjam) {
        $data = [
            'buku_yang_dipinjam' => $_POST['buku_yang_dipinjam'],
            'peminjam' => $_POST['peminjam'],
            'tanggal_pinjam' => $_POST['tanggal_pinjam'],
            'tanggal_kembali' => $_POST['tanggal_kembali'],
        ];

        $updated = $this->LoanModel->update($id_pinjam, $data);
        if ($updated) {
            header('Location: /loans/index'); // Redirect ke daftar peminjaman
        } else {
            echo "Gagal memperbarui data.";
        }
    }

    public function delete($id_pinjam) {
        $deleted = $this->LoanModel->delete($id_pinjam);
        if ($deleted) {
            header("Location: /loans/index"); // Redirect ke daftar peminjaman
        } else {
            echo "Gagal menghapus data.";
        }
    }
}
