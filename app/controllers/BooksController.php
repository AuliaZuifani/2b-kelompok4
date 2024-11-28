<?php
// app/controllers/UserController.php
require_once '../app/models/Books.php';

class BooksController {
    private $bookModel;

    public function __construct() {
        $this->bookModel = new Books();
    }


    public function index() {
        $books = $this->bookModel->getAllBooks();
        require_once '../app/views/books/index.php';

    }

    public function create() {
        $penerbit = $this->bookModel->getAllPenerbit();
        require_once '../app/views/books/create.php';
    }

    public function store() {
        $id_buku= $_POST['id_buku'];
        $judul = $_POST['judul'];
        $pengarang= $_POST['pengarang'];
        $tahun= $_POST['tahun'];
        $genre= $_POST['genre'];
        $this->bookModel->add($id_buku, $judul, $pengarang, $tahun, $genre);
        header('Location: /books/index');
    }
    // Show the edit form with the user data
    public function edit($id_buku) {
        $books = $this->bookModel->find($id_buku); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/books/edit.php';
    }

    // Process the update request
    public function update($id_buku) {
        $data = [
            'id_buku'=> $_POST['id_buku'],
            'judul' => $_POST['judul'],
            'pengarang' => $_POST['pengarang'],
            'tahun' => $_POST['tahun'],
            'genre' => $_POST['genre']
        ];

        $updated = $this->bookModel->update($id_buku, $data);
        if ($updated) {
            header("Location: /books/index"); // Redirect to user list
        } else {
            echo "Failed to update books.";
        }
    }

    // Process delete request
    public function delete($id_buku) {
        $deleted = $this->bookModel->delete($id_buku);
        if ($deleted) {
            header("Location: /books/index"); // Redirect to user list
        } else {
            echo "Failed to delete books.";
        }
    }
}
