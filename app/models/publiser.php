<?php
// app/models/publiser.php
require_once '../config/database.php';

class Publiser {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllPubliser() {
        $query = $this->db->query("SELECT * FROM publishers");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_penerbit) {
        $query = $this->db->prepare("SELECT * FROM publishers WHERE id_penerbit = :id_penerbit");
        $query->bindParam(':id_penerbit', $id_penerbit, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($id_penerbit, $nama_penerbit, $alamat, $kontak) {
        $query = $this->db->prepare("INSERT INTO publishers (id_penerbit, nama_penerbit, alamat, kontak) 
                                     VALUES (:id_penerbit, :nama_penerbit, :alamat, :kontak)");
        $query->bindParam(':id_penerbit', $id_penerbit);
        $query->bindParam(':nama_penerbit', $nama_penerbit);
        $query->bindParam(':alamat', $alamat);
        $query->bindParam(':kontak', $kontak);
        return $query->execute();
    }
    

    // Update user data by ID
    public function update($id_penerbit, $data) {
        $query = "UPDATE publishers SET nama_penerbit = :nama_penerbit, alamat = :alamat, kontak = :kontak WHERE id_penerbit = :id_penerbit";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_penerbit', $data['nama_penerbit']);
        $stmt->bindParam(':alamat', $data['alamat']);
        $stmt->bindParam(':kontak', $data['kontak']);
        $stmt->bindParam(':id_penerbit', $id_penerbit);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id_penerbit) {
        $queryPublisher = "DELETE FROM publishers WHERE id_penerbit = :id_penerbit";
        $stmtPublisher = $this->db->prepare($queryPublisher);
        $stmtPublisher->bindParam(':id_penerbit', $id_penerbit);
        return $stmtPublisher->execute();

        $queryBooks = "DELETE FROM books WHERE id_penerbit = :id_penerbit";
        $stmtBooks = $this->db->prepare($queryBooks);
        $stmtBooks->bindParam(':id_penerbit', $id_penerbit);
        $stmtBooks->execute();
    }
}