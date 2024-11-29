<?php
// app/controllers/BooksController.php
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
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $tahun = $_POST['tahun'];
        $genre = $_POST['genre'];
        $id_penerbit = $_POST['id_penerbit'];  

        if (!empty($id_buku) && !empty($judul) && !empty($pengarang) && !empty($tahun) && !empty($genre) && !empty($id_penerbit)) {
            $this->bookModel->add($id_buku, $judul, $pengarang, $tahun, $genre, $id_penerbit);
            header('Location: /books/index');  
        } else {
            echo "Semua data harus diisi!";
        }
    }

    public function edit($id)
    {
        $book = $this->bookModel->find($id);
        if ($book) {
            $books = $book; 
            $penerbit = $this->bookModel->getAllPenerbit();  
            require_once '../app/views/books/edit.php';
        } else {
            echo "Buku tidak ditemukan.";
        }
    }

    public function update($id_buku) {
        var_dump($_POST); 
        if (isset($_POST['id_buku'])) {
            $data = [
                'id_buku' => $_POST['id_buku'],  
                'judul' => $_POST['judul'],
                'pengarang' => $_POST['pengarang'],
                'tahun' => $_POST['tahun'],
                'genre' => $_POST['genre'],
                'id_penerbit' => $_POST['id_penerbit'],
            ];
    
           
            if (!empty($data['id_buku']) && !empty($data['judul']) && !empty($data['pengarang']) && !empty($data['tahun']) && !empty($data['genre']) && !empty($data['id_penerbit'])) {
                $updated = $this->bookModel->update($id_buku, $data);
                if ($updated) {
                    header("Location: /books/index"); 
                } else {
                    echo "Gagal Menambah Buku.";
                }
            } else {
                echo "Semua data harus diisi!";
            }
        } else {
            echo "Buku tidak ditemukan!";
        }
    }
    
    public function delete($id_buku) {
        $deleted = $this->bookModel->delete($id_buku);
        if ($deleted) {
            header("Location: /books/index"); 
        } else {
            echo "Failed to delete book.";
        }
    }
}