<?php
// app/models/Books.php
require_once '../config/database.php';

class Books {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();  
    }
    public function getAllBooks() {
        $query = "SELECT 
                    books.id_buku, 
                    books.judul, 
                    books.pengarang, 
                    books.tahun, 
                    books.genre, 
                    publishers.nama_penerbit  
                  FROM books 
                  JOIN publishers ON books.id_penerbit = publishers.id_penerbit"; 

        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }

    public function getAllPenerbit() {
        $query = "SELECT id_penerbit, nama_penerbit FROM publishers";  
        $stmt = $this->db->prepare($query); 
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function find($id_buku) {
        $query = "SELECT * FROM books WHERE id_buku = :id_buku";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);  
    }

    public function add($id_buku, $judul, $pengarang, $tahun, $genre, $id_penerbit) {
        $query = "INSERT INTO books (id_buku, judul, pengarang, tahun, genre, id_penerbit) 
                  VALUES (:id_buku, :judul, :pengarang, :tahun, :genre, :id_penerbit)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':pengarang', $pengarang);
        $stmt->bindParam(':tahun', $tahun);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':id_penerbit', $id_penerbit);
        return $stmt->execute(); 
    }

    public function update($id_buku, $data) {
        $query = "UPDATE books SET judul = :judul, pengarang = :pengarang, tahun = :tahun, genre = :genre, id_penerbit = :id_penerbit WHERE id_buku = :id_buku";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku);
        $stmt->bindParam(':judul', $data['judul']);
        $stmt->bindParam(':pengarang', $data['pengarang']);
        $stmt->bindParam(':tahun', $data['tahun']);
        $stmt->bindParam(':genre', $data['genre']);
        $stmt->bindParam(':id_penerbit', $data['id_penerbit']);
        return $stmt->execute();  
    }

    public function delete($id_buku) {
        $query = "DELETE FROM books WHERE id_buku = :id_buku";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku, PDO::PARAM_INT);
        return $stmt->execute(); 
    }
}
