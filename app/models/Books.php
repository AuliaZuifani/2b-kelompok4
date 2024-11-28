<?php
// app/models/User.php
require_once '../config/database.php';

class Books {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllBooks() {
        $query = $this->db->query("SELECT * FROM books");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllPenerbit() {
        $query = $this->db->query("SELECT * FROM publishers");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_buku) {
        $query = $this->db->prepare("SELECT * FROM books WHERE id_buku = :id_buku");
        $query->bindParam(':id_buku', $id_buku, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($id_buku, $judul, $pengarang, $tahun, $genre) {
        $query = $this->db->prepare("INSERT INTO books (id_buku, judul, pengarang, tahun, genre) VALUES (:id_buku, :judul, :pengarang, :tahun, :genre)");
        $query->bindParam(':id_buku', $id_buku);
        $query->bindParam(':judul', $judul);
        $query->bindParam(':pengarang', $pengarang);
        $query->bindParam(':tahun', $tahun);
        $query->bindParam(':genre', $genre);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id_buku, $data) {
        $query = "UPDATE books SET judul = :judul, pengarang = :pengarang, tahun = :tahun, genre = :genre WHERE id_buku = :id_buku";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku);
        $stmt->bindParam(':judul', $data['judul']);
        $stmt->bindParam(':pengarang', $data['pengarang']);
        $stmt->bindParam(':tahun', $data['tahun']);
        $stmt->bindParam(':genre', $data['genre']);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id_buku) {
        $query = "DELETE FROM books WHERE id_buku = :id_buku";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku);
        return $stmt->execute();

        $query = "DELETE FROM publishers WHERE id_penerbit = :id_penerbit";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_penerbit', $id_buku);
        return $stmt->execute();
    }
}
